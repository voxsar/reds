var $$ = Dom7;

/*var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'REDS by RACACBT',
  // App id
  id: 'org.rotaractacbt.reds',
  // Enable swipe panel
  theme: 'auto',
  routes: [{
      name: 'about',
      path: '/about/',
      url: './about.html',
      options: {
        animate: true,
      },
    }]
});*/
var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'My App',
  // App id
  id: 'com.myapp.test',
  // Enable swipe panel
  panel: {
    swipe: 'left',
  },
  // Add default routes
  routes: [
    {
      name: 'Home',
      path: '/',
      url: 'main.html',
    },
    {
      name: 'report',
      path: '/report/',
      url: 'report.html',
    },  
    {
      name: 'about',
      path: '/about/',
      url: 'about/about.html',
    },  
    {
      name: 'privacy',
      path: '/privacy/',
      url: 'about/privacy.html',
    },  
    {
      name: 'reporthistory',
      path: '/reporthistory/',
      url: 'report-history.html',
    }
  ],
  // ... other parameters
});

var mainView = app.views.create('.view-main', {url: '/'});


// Option 1. Using one 'page:init' handler for all pages
$$(document).on('page:init', function (e) {
  // Do something here when page loaded and initialized

  var swiper = app.swiper.create('.swiper-container', {
    speed: 400,
    spaceBetween: 100
  });
})

// Handle Cordova Device Ready Event
$$(document).on('deviceready', function() {
    console.log("Device is ready!");
});

// create searchbar
var searchbar = app.searchbar.create({
  el: '.searchbar',
  searchContainer: '.list',
  searchIn: '.item-title',
  on: {
    search(sb, query, previousQuery) {
      console.log(query, previousQuery);
    }
  }
})