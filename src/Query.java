import java.sql.*;

import org.scribe.builder.ServiceBuilder;
import org.scribe.model.OAuthRequest;
import org.scribe.model.Response;
import org.scribe.model.Token;
import org.scribe.model.Verb;
import org.scribe.oauth.OAuthService;

import com.google.gson.Gson;
import com.yelp.v2.Business;
import com.yelp.v2.YelpSearchResult;

public class Query
{

	public Query(String keywords, String c)
	{
		
		String CONSUMER_KEY = "JCEsAjocnNw5DuWnMjb7Qg";
		String CONSUMER_SECRET = "QZcDKySg6vI7PIOWSZ4lMjPX4xs";
		String TOKEN = "nD_fg5ZTi3jCCAD1ucbbwTXVF5GZMVUL";
		String TOKEN_SECRET = "RdWXg3-Z2svNGTLJO74tQVZD9eE";
	
		
		// Execute a signed call to the Yelp service.  
		OAuthService service = new ServiceBuilder().provider(YelpV2API.class).apiKey(CONSUMER_KEY).apiSecret(CONSUMER_SECRET).build();
		Token accessToken = new Token(TOKEN, TOKEN_SECRET);
		OAuthRequest request = new OAuthRequest(Verb.GET, "http://api.yelp.com/v2/search");
		request.addQuerystringParameter("term", keywords);
		request.addQuerystringParameter("location", c);
		request.addQuerystringParameter("category_filter", "restaurants");
		service.signRequest(accessToken, request);
		Response response = request.send();
		String rawData = response.getBody();
		Connection conn;
	    String name;
	    String phone;
	    String imgUrl;
	    String url;
	    

		 
		// Sample of how to turn that text into Java objects.  
		try 
		{
			YelpSearchResult places = new Gson().fromJson(rawData, YelpSearchResult.class);
			
			System.out.println(rawData);
			
			System.out.println("Your search found " + places.getTotal() + " results.");
			System.out.println("Yelp returned " + places.getBusinesses().size() + " businesses in this request.");
			System.out.println();
			
			
			for(Business biz : places.getBusinesses()) 
			{
				System.out.println(biz.getName());
				System.out.print("  " + biz.getLocation().getCity());
				System.out.println(biz.getUrl());
				System.out.println();
				System.out.println(biz.getPhone());
				System.out.println(biz.getImage_url());
				System.out.println(biz.getLocation());
				System.out.println(biz.getMobile_url());
				
				String city=biz.getLocation().getCity();
				name=biz.getName();
				url=biz.getUrl();
				phone=biz.getPhone();
				imgUrl=biz.getImage_url();
		
	    
			    try
			    {
			      Class.forName("com.mysql.jdbc.Driver").newInstance();
			      conn = DriverManager.getConnection(
			              "jdbc:mysql://mysql.quiando.com/quiando",
			              "asktheoracle","5|_|nburns");
			      String sql = "INSERT INTO biz (phone, imgUrl, city, url, name) VALUES (?, ?, ?, ?, ?)";
			      PreparedStatement pstmt = conn.prepareStatement(sql);
			      try
			      {
			          pstmt.setString(1, phone);
			          pstmt.setString(2, imgUrl);
			          pstmt.setString(3, city);
			          pstmt.setString(4, url);
			          pstmt.setString(5, name);
			          
			          pstmt.executeUpdate();
			      }
			      finally
			      {
			          pstmt.close(); 
			      }
			    }
			    catch (Exception sqlEx)
			    {
			      System.err.println(sqlEx);
			    }
			}
		}
		catch(Exception IOexception)
		{
			IOexception.printStackTrace();
		}
		finally
		{
			;
		}
	}
		
	  
	

	public static void main(String[] args) throws ArrayIndexOutOfBoundsException
	{
		System.out.println(args.length);
		new Query(args[0], args[1]);
	}

}
