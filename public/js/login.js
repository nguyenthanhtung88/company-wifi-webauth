function submitAction(){
      var link = document.location.href;
      var searchString = "redirect=";
      var equalIndex = link.indexOf(searchString);
      var redirectUrl = "";

      if (document.forms[0].action == "") {
      var url = window.location.href;
      var args = new Object();
      var query = location.search.substring(1);
      var pairs = query.split("&");
          for(var i=0;i<pairs.length;i++){
              var pos = pairs[i].indexOf('=');
              if(pos == -1) continue;
              var argname = pairs[i].substring(0,pos);
              var value = pairs[i].substring(pos+1);
              args[argname] = unescape(value);
          }
          document.forms[0].action = args.switch_url;
      }
      if(equalIndex >= 0) {
            equalIndex += searchString.length;
            redirectUrl = "";
            redirectUrl += link.substring(equalIndex);
      }
      if(redirectUrl.length > 255)
      redirectUrl = redirectUrl.substring(0,255);
      document.forms[0].redirect_url.value = redirectUrl;
      document.forms[0].buttonClicked.value = 4;
      document.forms[0].submit();
}

function loadAction(){
     var url = window.location.href;
     var args = new Object();
     var query = location.search.substring(1);
     var pairs = query.split("&");
     for(var i=0;i<pairs.length;i++){
          var pos = pairs[i].indexOf('=');
          if(pos == -1) continue;
          var argname = pairs[i].substring(0,pos);
          var value = pairs[i].substring(pos+1);
          args[argname] = unescape(value);
     }


     document.forms[0].action = args.switch_url;

     // This is the status code returned from webauth login action
     // Any value of status code from 1 to 5 is error condition and user
     // should be shown error as below or modify the message as it suits
     // the customer

     if(args.statusCode == 1){
        alert("You are already logged in. No further action is required on your part.");
     }
     else if(args.statusCode == 2){
        alert("You are not configured to authenticate against web portal. No further action is required on your part.");
     }
     else if(args.statusCode == 3){
        alert("The username specified cannot be used at this time. Perhaps the user is already logged into the system?");
     }
     else if(args.statusCode == 4){
        alert("Wrong username and password. Please try again.");
     }
     else if(args.statusCode == 5){
        alert("The User Name and Password combination you have entered is invalid.  Please try again.");
     }
}
