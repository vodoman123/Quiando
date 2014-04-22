package com.yelp.v2;

import java.util.List;
import java.util.Map;

@SuppressWarnings("unused")
public class Business {
	private String id;
	private String name;
	private String image_url;
	private String url;
	private String mobile_url;
	private String phone;
	private String displayPhone;
	private int reviewCount;
	private List<List<String>> categories;
	private double distance;
	private String ratingImgUrl;
	private String ratingImgUrlSmall;
	private String snippetText;
	private String snippetImgUrl;
	private Location location;
	private int votes;
	
	public int getVotes()
	{
		return votes;
	}
	
	public void setVotes(int votes)
	{
		this.votes=votes;
	}
	
	public String getId() {
		return id;
	}
	public void setId(String id) {
		this.id = id;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getImage_url() {
		return image_url;
	}
	public void setimage_url(String image_url) {
		this.image_url = image_url;
	}
	public String getUrl() {
		return url;
	}
	public void setUrl(String url) {
		this.url = url;
	}
	public String getMobile_url() {
		return mobile_url;
	}
	public void setmobile_url(String mobile_url) {
		this.mobile_url = mobile_url;
	}
	public String getPhone() {
		return phone;
	}
	public void setPhone(String phone) {
		this.phone = phone;
	}
	public String getDisplayPhone() {
		return displayPhone;
	}
	public void setDisplayPhone(String displayPhone) {
		this.displayPhone = displayPhone;
	}
	public int getReviewCount() {
		return reviewCount;
	}
	public void setReviewCount(int reviewCount) {
		this.reviewCount = reviewCount;
	}
	public List<List<String>> getCategories() {
		return categories;
	}
	public void setCategories(List<List<String>> categories) {
		this.categories = categories;
	}
	public double getDistance() {
		return distance;
	}
	public void setDistance(double distance) {
		this.distance = distance;
	}
	public String getRatingImgUrl() {
		return ratingImgUrl;
	}
	public void setRatingImgUrl(String ratingImgUrl) {
		this.ratingImgUrl = ratingImgUrl;
	}
	public String getRatingImgUrlSmall() {
		return ratingImgUrlSmall;
	}
	public void setRatingImgUrlSmall(String ratingImgUrlSmall) {
		this.ratingImgUrlSmall = ratingImgUrlSmall;
	}
	public String getSnippetText() {
		return snippetText;
	}
	public void setSnippetText(String snippetText) {
		this.snippetText = snippetText;
	}
	public String getSnippetImgUrl() {
		return snippetImgUrl;
	}
	public void setSnippetImgUrl(String snippetImgUrl) {
		this.snippetImgUrl = snippetImgUrl;
	}
	public Location getLocation() {
		return location;
	}
	public void setLocation(Location location) {
		this.location = location;
	}
	
}
