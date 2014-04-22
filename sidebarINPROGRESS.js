window.onload = function () 
{
        var numPlaces = 5;
        
        var container = document.getElementById("sidebar");
        for(var i =0; i < numPlaces; i++){
          var yelpNumPeople = bizVotes[i];
          var yelpEventTime = lunchTime[i];
          var eventContainter = document.createElement('div');
          eventContainter.id = 'event'+i;             // No setAttribute required
          eventContainter.className = 'event' // No setAttribute required, note it's "className" to avoid conflict with JavaScript reserved word

          container.appendChild(eventContainter);

          var rowFluid = document.createElement('div');
          rowFluid.className = "row-fluid";
          eventContainter.appendChild(rowFluid);

          var imgSpan = document.createElement('div');
          imgSpan.className = "span3";
          rowFluid.appendChild(imgSpan);

          var locationPic = document.createElement('img');
          locationPic.className = "event-img";
          locationPic.src = bizImg[i];
          locationPic.height = "42";
          locationPic.width = "42";
          imgSpan.appendChild(locationPic);

          var contentSpan = document.createElement('div');
          contentSpan.style.paddingTop = "5px";
          contentSpan.className = "span9";
          var yelpLink = bizUrl[i];
          var yelpName = bizName[i];
          contentSpan.innerHTML = '<a href="' + yelpLink + '">' + yelpName  +'</a>';
          rowFluid.appendChild(contentSpan);

          var contentRowFluid = document.createElement('div');
          contentRowFluid.className = "row-fluid";
          contentSpan.appendChild(contentRowFluid);

          var people = document.createElement('div');
          people.className = "span4";
          contentRowFluid.appendChild(people);
          people.innerHTML = 'people: ' + yelpNumPeople;

          var time = document.createElement('div');
          time.className = "span4";
          contentRowFluid.appendChild(time);
          time.innerHTML = yelpEventTime;

          var joinButton = document.createElement('div');
          joinButton.className = "span4";
          contentRowFluid.appendChild(joinButton);
          joinButton.innerHTML = '<a class="btn btn-mini btn-primary" href="register.html"> Join </a>'; 

        }
      };
