# Welcome to my personal website!

## Pages

### Homepage
* [x] [index.php](ririspalace.com/index.php) - Home
	* *config/previews.php*

### Nav Links
* [ ] [about.php](ririspalace.com/about.php) - About Me
	* *config/arianna.php*
* [x] [kpop.php](ririspalace.com/kpop.php) - KPop
	* *config/kpop-groups.php*
	* *validation/kpop.php* - Hasn't been created yet
* [x] [stranger-things.php](ririspalace.com/stranger-things.php) - Stranger Things
	* *config/stranger-things-config.php*
* [ ] [marvel.php](ririspalace.com/marvel.php) - Marvel
	* *config/marvel-posts.php*
	* [ ] TODO: Work on Hero Scrollbar
* [ ] [star-wars.php](ririspalace.com/star-wars.php) - Star Wars

### Login
* [x] [login.php](ririspalace.com/login.php) - Login Button in Header
	* *config/logout.php*
	* *validation/login.php*
* [x] [login-forgot.php](ririspalace.com/login-forgot.php) - "Forgot Password" Page For Inputting Email
	* *validation/forgot.php*
* [x] [login-code.php](ririspalace.com/login-code.php) - Code Input From Email Sent by [login-forgot.php](ririspalace.com/login-forgot.php)
	* *validation/code.php*
* [x] [login-profile.php](ririspalace.com/login-profile.php) - Profile (Link in header): Only shown when logged in
	* *validation/profile.php*
	* *validation/profile-delete.php*
* [x] [login-signup.php](ririspalace.com/login-signup.php) - Sign Up Page
	* *validation/login-signup.php*

## Included Pages
* [x] **include/head-tag.php** - Configures head tag with proper tags for quicker initilization, initializes css and js CDNs
* [x] **include/loading-page.php** - Loading Page
* [x] **include/under-construction.php** - Construction Page for Unfinished Pages
* [x] **include/header.php** - Header Banner
* [x] **include/page-nav.php** - Collapsible Page Navigation: when used with $pageNav array before the page content it populates the page navigation sidebar
* [x] **include/footer.php** - Footer Button

## Extra Config
* [x] **config/mysql-connect.php** - Sets default database connection variable values
* [x] **config/nav-links.php** - Nav links for header banner
* [x] **config/session.php** - Initializes session for every page
* [ ] **archive/kpop-validation.php** - Currently not in use, was used to validate a dropdown of member names

## Styles (derived from SCSS)

* Bootstrap CDN - Header Banner, Modals, Image Carousels
* FontAwesome CDN - Icons
* css/main.css - Utility Classes, Themes, Error Pages, Overlay Pages, Header, Profile Page, Footer
* css/index.css - Homepage
* css/kpop.css - KPop
* css/stranger-things.css - Stranger Things
* css/marvel.css - Marvel
* css/main-mobile.css - Header Mobile, Homepage Mobile, Stranger Things Mobile
* css/kpop-mobile.css - KPop Mobile

## Scripts (derived from TS)

* js/main.js - loadingPage(), collapsibleSidebar()
* js/kpop.js - lazyloadModalImages(), *soon searchBarKpop() and reorderGroups()*
* js/login-signup.js - matchPasswords()
* js/profile.js - showDeleteForm()
* js/stranger-things.js - s4Vol1Countdown(), s4Vol2Countdown(), lazyloadCarousels()
