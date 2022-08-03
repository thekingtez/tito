# Jobster WordPress Theme

Jobster is the most advanced and feature rich WordPress theme for service marketplace.
Developed and maintained by the people who run a successful marketplace of their own.

## Changelog

### 6.0.9 - 01 Jun 2022

Improvements
* Added Redirects menu to Jobster Settings > Page Settings
* Prevent payment when multiple clicks
* Added the option to set float values for subscription

Bugfixes
* Fixed custom extra & tips credits payment
* Fixed subscription cancellation
* Fixed withdrawal amount error
* Fixed PayPal withdrawal

### 6.0.8 - 30 May 2022

Improvements
* Added option to deactivate subscription period
* Added new type fields and documentation for custom fields (https://docs.wpjobster.com/article/243-add-custom-fields-for-job-request-and-user)

Bugfixes
* Fixed carousel arrows appearance

### 6.0.7 - 26 May 2022

Improvements
* Added timer to resend SMS action
* Added option to display dropdown menu in one column (Jobster Design > Header > Menu > Dropdown Menu > Menu style)
* Added editable default currency for licenses without multi-currency feature
* Added user reviews to Admin Messages menu
* Added support for user, job and request custom fields

Bugfixes
* Fixed WYSIWYG layout
* Fixed long word for card username
* Fixed new line for quick responses

### 6.0.6 - 20 May 2022

Improvements
* Added process/cancel payment buttons for subscriptions
* Added sms code field if the key is wrong

Bugfixes
* Fixed sortable for job images
* Fixed invisible cursor for tags
* Fixed instructions alignment for packages custom fields
* Fixed autodraft requests appearance
* Fixed requests details after load more
* Fixed WYSIWYG height
* Fixed TinyMCE editor
* Fixed RTL order timer layout
* Fixed automatically detection old version for user info

### 6.0.5 - 16 May 2022

Improvements
* Disabled fast delivery days have been added so that the seller can choose for fast delivery only a smaller number than the total number of days added to the milestone table.
* Disabled fast delivery days have been added so that the seller can choose for fast delivery only a smaller number than the largest number of days added to the packages table.
* Added user links to job presentation page (Reset the 'Job' page to its original content to get this improvement)

Bugfixes
* Fixed feedback page layout
* Fixed job reviews list response
* Fixed user reviews list response
* Fixed page content reset for extension pages
* Fixed badge payment
* Fixed payment buttons on load for featured and subscription
* Fixed price layout for featured and badges
* Fixed job and request activation and deactivation functionality
* Fixed featured functionality
* Fixed work sample review layout
* Fixed credits for negative balance
* Fixed job link for video cards
* Fixed processing fees and tax value for Extra tab
* Fixed packages custom fields for edit job page
* Fixed custom offer button appearance when job price type is custom
* Fixed order timer appearance for packages
* Fixed order header action button responsive visibility (Reset the 'Order' page to its original content to get this improvement)
* Fixed featured invoice link
* Fixed search for booking, milestone and packages jobs
* Fixed automatically detection for user info
* Fixed work sample thumbnail for job slider
* Fixed emoji for transaction messages
* Fixed empty labels for request presentation page (Reset the 'Request' page to its original content to get this improvement)

### 6.0.4 - 05 May 2022

Improvements
* Added discount compatibility (Update Discount plugin to 3.0)
* Added option to change footer images for mobile applications (Jobster Design > Footer > Mobile application)
* Update user credits without page refresh
* Added option to replace mobile menu icons with images (Jobster Design > Header > Menu > Mobile menu)
* Added date to user reviews

Bugfixes
* Fixed job quantity price value
* Fixed load more functionality

### 6.0.3 - 29 Apr 2022

Improvements
* Added invoice compatibility (Update Invoice plugin to 3.0)
* Added category, order and jobs limit to job_posts_list shortcode (Example: [job_posts_list jobs=4 columns=4 order=random category=11])

Bugfixes
* Fixed arabic flag
* Fixed subscription instructions
* Fixed blog post content appearance
* Fixed milestone plugin functionality (Reset the 'Order' page to its original content to get this improvement)
* Fixed user reviews photo and name
* Fixed job audio layout
* Fixed checkout packages price
* Fixed transactions items appearance
* Fixed Dropzone errors appearance
* Fixed Topup page title position (Reset the 'TopUpOrder' page to its original content to get this improvement)
* Fixed avatar for job presentation page

### 6.0.2 - 18 Apr 2022

Improvements
* Added booking compatibility (Reset the 'Order' page to its original content to get this improvement)

Bugfixes
* Fixed page title conflict with Yoast
* Fixed user profile contact button action
* Fixed user profile avatar position
* Fixed user contact layout
* Fixed custom offer buttons appearance

### 6.0.1 - 15 Apr 2022

Improvements
* Added customizable category icons for Homepage - Logged In (Reset the page to its original content to get this improvement)

Bugfixes
* Fixed 1updater plugin notification
* Fixed job review stars alignment
* Fixed free job functionality
* Fixed WYSIWYG description for packages
* Fixed job validation for instant delivery files
* Fixed job share modal layout
* Fixed admin tables width
* Fixed job presentation page for PHP8
* Fixed custom extra cancellation
* Fixed for admin table layout

### 6.0.0 - 12 Apr 2022

Features
* Added theme installation step-by-step
* New design
* New panel for theme settings
* New panel for theme design settings
* New options for header & footer design
* Added a new type for chat sidebar: minimalist
* Editable page content from builder (Gutenberg)
* Page changing without refresh
* All actions with AJAX
* Performance improvements
* Compatibility with cache plugins
* Editable theme menus

### 5.8.5 - 15 Dec 2021

Features
* Added ability to limit the number of active jobs for a seller

Improvements
* Added filters to email private message content & excerpt

Bugfixes
* Fixed Resolution Center menu disappearance
* Fixed Load More button disappearance
* Fixed various RTL issues

### 5.8.4 - 5 Nov 2021

Features
* Added share prompt after a job has been posted by the seller (Most wanted: https://feedback.wpjobster.com/posts/282/automatic-share-prompt-after-posting-new-job)
* Added seller rejection reason (Most wanted: https://feedback.wpjobster.com/posts/354/seller-profile-rejection) - update Account Segregation Plugin to 2.2.4 version
* Added shortcodes for private message excerpt and content inside emails (Most wanted: https://feedback.wpjobster.com/posts/200/add-message-preview-on-private-message-email)
* Added option for automatic country detection for phone number

Improvements
* Added translation for 'custom job' words
* Added additional verification for orders before entering the database to avoid multiple insertions

Bugfixes
* Fixed mobile homepage slider arrows
* Fixed Two Factor Authentication
* Fixed customizer options
* Fixed user search for username containing a dot
* Fixed withdrawal action for proposal page
* Fixed orders for PHP 8
* Fixed validation strings for post new job page
* Fixed RTL phone number flag alignment

### 5.8.3 - 10 Aug 2021 (https://wpjobster.com/wpjobster-5-8-3)

Features
* Added support for registration custom fields using ACF (Most wanted: https://feedback.wpjobster.com/posts/193/force-full-name-on-registration)
* Added support for admin menu restriction by user role (Most wanted: https://feedback.wpjobster.com/posts/229/allow-staff-to-control-certain-aspect-of-jobster-admin)

Improvements
* Updated Wordpress Social Login to 3.0.8 version
* AJAX private message conversations (no page refresh)

Bugfixes
* Fixed email sending for autodraft requests
* Fixed order page messages
* Fixed approve when default type is seller - update Account Segregation Plugin to 2.2.3 version

### 5.8.2 - 01 Jul 2021 (https://wpjobster.com/wpjobster-5-8-2)

Features
* Added new button for image upload to private message page and chat message box
* Added WhatsApp notifications with Twilio (Most wanted: https://feedback.wpjobster.com/posts/455/whatsapp-notifications)
* Added thumbs up system and logo upload for user skills (Most wanted: https://feedback.wpjobster.com/posts/383/areas-of-expertise)

Improvements
* Updated ACF to 5.9.5 version
* Added compatibility for PHP 8
* Moved message attachments settings to admin Private Message settings page
* Added option to set the number of unanswered orders until the 'Unresponsive' label appears

Bugfixes
* Fixed request user display type
* Fixed user description
* Fixed user sidebar list
* Fixed package price type job on page load

### 5.8.1 - 18 May 2021

Features
* Added support for milestones system through an external plugin (will be released shortly)
* Added option for 2FA on login & register (Admin > General Settings > User Settings > User login/register )

Improvements
* Prevent private messages from being sent multiple times
* Added option to disable login hints (Admin > General Settings > User Settings > User login/register )
* Added validation for user profile fields before saving
* Added license details to Admin Information Menu

Bugfixes
* Fixed private messages emoji input on Firefox
* Fixed duplicate notifications on the order page
* Fixed message and notification tooltip position
* Fixed chat sidebar users list order
* Fixed packages mobile/pc layout

### 5.8.0 - 08 Apr 2021

Features
* Redesigned private messages
* Added affiliate reports for users (Most wanted: https://feedback.wpjobster.com/posts/478/affiliate-system) - update Affiliate Plugin to 2.0.6

Improvements
* Prevent autodraft requests
* Added compatibility with WP 5.7
* Added crypto to exchange values

Bugfixes
* Fixed responsive proposal title
* Fixed Brizy pages import
* Fixed extra fast delivery number
* Fixed tips and custom extra in Admin Summary
* Fixed admin private messages search
* Fixed file name with apostrophe
* Fixed subscription name on responsive
* Fixed flexible fees
* Fixed order timer if the status is processing
* Fixed audio for post new job page
* Fixed favorite job on search page
* Fixed special characters for user skills
* Fixed duplicated order notifications
* Fixed phone filter

### 5.7.3 - 13 Feb 2021

Improvements
* Added a span with a class on user company string

Bugfixes
* Fixed Brizy demo content import
* Fixed subscription emails shortcodes translation
* Fixed payment types translations
* Fixed user profile skills word break
* Fixed request link in admin email

### 5.7.2 - 26 Ian 2021

Features
* Added multiple badges system (https://feedback.wpjobster.com/posts/286/allow-badges-to-be-seen-in-job-listing)
* Added FAQ system for jobs (https://feedback.wpjobster.com/posts/242/job-faq)

Improvements
* Added option to use TinyMCE for job description (https://feedback.wpjobster.com/posts/140/formatting-job-descriptions)
* Added WhatsApp share button for desktop version
* Improved phone number filter
* Improved price inputs to allow only number entries

Bugfixes
* Fixed flexible fees user level
* Fixed arbitration email details
* Fixed featured admin report
* Fixed responsive categories menu order
* Fixed list view for job search page
* Fixed blog posts category filter
* Fixed vimeo player

### 5.7.1.3 - 31 Dec 2020

Bugfixes
* Fixed quick responses for RTL
* Fixed price info when multiple is disabled
* Fixed special characters for user skills
* Fixed 'Send message with Enter key'

### 5.7.1.2 - 27 Dec 2020

Improvements
* Added payment gateway name translatable

Bugfixes
* Fixed quick responses when booking is disabled

### 5.7.1.1 - 22 Dec 2020

Bugfixes
* Fixed job cover display on edit job page
* Fixed HTML5 File Upload for job images and cover

### 5.7.1 - 20 Dec 2020

Features
* Added quick response system (https://feedback.wpjobster.com/posts/78/features-required)

Improvements
* Added compatibility with WP 5.6
* Added work samples to Slider cards
* Added emoji for transaction messages
* Added complete expressions for translatable job validation messages
* Added email/sms reminder for orders that will expire soon (https://feedback.wpjobster.com/posts/78/features-required)
* Added grouped chat messages when the time between two messages is less than 30 seconds
* Improved theme performance (SQL)

Bugfixes
* Fixed emoji inside inbox page
* Fixed job listing, slider type on responsive
* Fixed overlapping autocomplete search box
* Fixed user profile 'Icons' section
* Fixed job description counter
* Fixed chat height
* Removed 'WordPress' word from authentication pages
* Fixed job sorting filters
* Fixed vimeo poster
* Fixed post new job page for RTL mobile
* Fixed rejected job description for mobile

### 5.7.0.2 - 12 Nov 2020

Improvements
* Added translation for order statuses

Bugfixes
* Fixed long word for skills
* Fixed job name and job link for order emails
* Fixed Brizy slider triangles
* Fixed emoji inside message preview
* Fixed sort by for jobs and requests
* Fixed homepage search height

### 5.7.0.1 - 05 Nov 2020

Improvements
* Hiding 'Posted Jobs' for buyers
* Added function_exists condition for messages and notifications panel

Bugfixes
* Fixed admin customizer

### v5.7.0 - 02 Nov 2020

Features
* Added extended delivery time system (https://feedback.wpjobster.com/posts/78/features-required)
* Added emoji for private message system (https://feedback.wpjobster.com/posts/78/features-required)

Improvements
* Added translation for mobile packages
* Added RTL option for email notifications
* Added translation for delete all jobs
* Added reCaptcha form to AIO login page
* Added filters for non-alphanumeric words and symbols
* Update legend messages
* Improved Open Exchange Rates
* Added custom offer review count to cards and job page (https://feedback.wpjobster.com/posts/613/custom-order-reviews)
* Added custom offer to rating filter (https://feedback.wpjobster.com/posts/613/custom-order-reviews)
* Added option to invert RTL countdown timer on transaction page
* Prevent payment when multiple clicks
* Added checkboxes to admin page for required subcategory and buyer instructions (https://feedback.wpjobster.com/posts/633/have-the-option-to-make-a-category-not-applicable-to-payments)

Bugfixes
* Fixed packages description position
* Fixed work samples initialization
* Fixed validation for custom price type
* Fixed lazy load for tabs and chat
* Fixed overlapping checkbox on RTL
* Fixed user account graph
* Fixed revolution slider for mobile
* Fixed topup conversion
* Fixed new request for not registered users
* Fixed custom extra email details
* Removed proposals page if custom offer disabled
* Fixed user cover
* Fixed missing letters for non-alphanumeric languages
* Fixed skills for non-alphanumeric languages
* Fixed site fee value for admin summary report
* Fixed total sales value for admin summary report

### v5.6.9 - 25 Sep 2020

Improvements
* Added new shortcode for site search: [wpj_site_searchform] - https://docs.wpjobster.com/article/132-search-shortcodes
* Added option to change the pacakges location on post new job page
* Added translation for proposal page
* Added translation for activate/deactivate all jobs

Bugfixes
* Fixed deleting images from users' portfolios
* Fixed deleting images from the admin panel
* Fixed admin SMS settings page
* Fixed break  line for additional bank field
* Fixed user avatar on order page
* Fixed new user education option
* Fixed WYSIWYG when the site has a bigger font
* Fixed RTL icons from job page
* Fixed buyer instruction display option
* Fixed mobile menu on double click
* Fixed duplicated jobs on user profile

### v5.6.8 - 15 Sep 2020

Improvements
* Added support for menu custom classes
* Added option to change the colour for header language and currency selector
* Added option to change footer logo
* Added option to disable grayscale for footer logo

Bugfixes
* Fixed mobile header custom background color on scroll
* Fixed post new job error when the category has no subcategories
* Fixed extras and multiples on checkout page
* Fixed custom offer purchase
* Fixed user display form when first or last name is empty
* Fixed badge image

### v5.6.7 - 04 Sep 2020

Improvements
* Added WP default search and compatibility with search plugins
* Improved security for post new job page
* Added translation for dropdown 'No result found'

Bugfixes
* Fixed order page timer
* Fixed header custom background color on scroll
* Fixed reCaptcha
* Fixed various RTL issues
* Fixed featured payment
* Fixed font for Login & Register page
* Fixed header size when chat is active
* Fixed instructions tooltip for Post New Job page
* Fixed removing skills with multiple words

### v5.6.6 - 24 Aug 2020

Improvements
* Added option for display name publicaly
* Added option for site filters

Bugfixes
* Fixed saves on the user's profile page
* Fixed RTL for Slider Revolution
* Fixed mobile header icons tooltip
* Fixed post new job when only COD active and fee disabled

### v5.6.5 - 18 Aug 2020

Features
* WYSIWYG editor for emails (Most wanted: https://feedback.wpjobster.com/posts/371/insert-any-html-code-and-any-other-code-email-notification)

Improvements
* Improved WP 5.5 compatibility
* Updated Kirki plugin
* Updated ACF plugin
* Added more information about PayPal Withdrawal errors
* Added more information about Featured purchase errors
* Added map display for 'Location' custom field type
* Added option to change the mobile header menu icons form and colour
* Added user account menu to proposal page

Bugfixes
* Fixed submenu appearance
* Fixed COD appearance when fee disabled
* Fixed incompatibility between Newsletter and WP Better Email plugins

### v5.6.4 - 31 Jul 2020 (https://wpjobster.com/wpjobster-5-6-4)

Features
* Added new section with icons for user profile page (Most wanted: https://feedback.wpjobster.com/posts/384/optional-summary-dashboard)
* Added new page for send and received proposals

Improvements
* Improved bulk job activation, deactivation and deletion
* Added translation for reCaptcha
* Added option to send message on transaction page when Enter key is pressed
* Added filters for avatar min width and height values
* Added backwards compatibility for old custom gateways
* Added option for slider menu when too many items
* Improved refund functionality
* Added admin job edit link as parameter for emails
* Added bulk and single job activation and deactivation for administrator
* Added filters for active and inactive jobs for administrator
* Improved Admin Users Page
* Added option to mark user email and phone number as verified from admin panel
* Improved payment errors UI
* Added option to change the header icons form and colour
* Added option to change the default user avatar and job image
* Added option to change the badge and email verified icons
* Added new statistics for user profile page

Bugfixes
* Fixed vertical center align for header icons
* Fixed HTML5 Image Uploader
* Fixed job long title word
* Fixed user level translation
* Fixed Let's meet tooltip for mobile
* Fixed feature 'no gateway' message
* Fixed mobile submenu position
* Fixed Payoneer activation option
* Hide topup button if disabled
* Fixed Slider cards video height when the layout is changed
* Fixed responsive Slider cards image
* Fixed responsive header custom background color
* Fixed PayPal webhook URL
* Fixed broken jobs row for Safari
* Fixed job image sort functionality

### v5.6.3 - 22 Jun 2020 (https://wpjobster.com/wpjobster-5-6-3)

Features
* Added Work Samples
* Added democontent for Gutenberg WordPress

Improvements
* Added currency selector for bank transfer
* Added 'Edit job' button if user is job author
* Prevent SQL injection when submitting a review
* Improved payment system (removed page refresh)
* Added option to disable payment gateway only for job purchase
* Added option to activate/deactivate/delete all jobs
* Added option to change job permalink to author username

Bugfixes
* Fixed functionality of sort by for new installations
* Fixed 'price type rate' string translation
* Fixed 'View all news' button position
* Fixed exchange system
* Fixed featured hiding when is disabled from admin
* Fixed category and location for search shortcodes
* Fixed price type filter display
* Fixed image path as image name in job image and cover
* Fixed chat letter count
* Fixed card description for list view
* Fixed responsive for very old devices (300-320px wide)
* Fixed custom offer expired email when offer accepted
* Fixed Revolution Slider and Job Media tab for Firefox
* Prevented multiple clicks on feedback submit
* Fixed image removal for Android devices
* Fixed filters for reported item

### v5.6.2 - 10 May 2020

Features
* Added Stripe Strong Customer Authentication (SCA) - update Stripe Plugin to 3.0

Improvements
* Improved admin pagination
* Improved theme security
* Improved user account table for mobile
* Improved phone number filter
* Improved messages and notifications preview
* Added options for open exchange rates API (Admin Dashboard > Pricing Settings > Rates)
* Added option to login with email
* Added option to send message when Enter key is pressed
* Added option to allow users to add social media links to their profile

Bugfixes
* Fixed user profile job section wrapper
* Fixed user registration email as username
* Fixed withdrawal amount value after error
* Fixed jobs rating filter
* Fixed load more button for Visual Composer

### v5.6.1 - 01 Apr 2020 (https://wpjobster.com/wpjobster-5-6-1)

Improvements
* Changing tabs when the browser back / forward button is pressed
* Automatically convert PayPal unsupported currencies
* Redirect to job page when video card image is pressed
* Show formatted content for blog and news pages
* Added gross and net earnings to user account table
* Added max upload size value to admin upload options
* Improved 'list_site_users' shortcode to display top rated sellers
* Added admin and user option to display instructions on job page
* Added 'Performance' section to Admin Customizer

Bugfixes
* Fixed 'Completed jobs' value on user search page
* Fixed filters for blog and news pages
* Fixed Yoast site map when qTranslate is active
* Fixed seller username for job purchased email
* Fixed audio player for posts
* Fixed broken Job Cards
* Fixed Admin Screen options
* Fixed Site Timezone
* Fixed Site Health critical errors
* Fixed job slider for incorrect video link
* Fixed Admin job price type
* Fixed mobile list view for simple layout
* Fixed admin reports values

### v5.6.0 - 26 Feb 2020

Bugfixes
* Fixed social network profile photo
* Fixed order emails
* Fixed reset password emails
* Fixed email verification emails

### v5.5.9 - 25 Feb 2020 (https://wpjobster.com/wpjobster-5-5-9)

Features
* New job cards/thumbnails style (activable in Customizer -> Layout Options)
* Added shortcodes for emails:
	* {job_listings}
	* {job_viewed_listings}
	* {job_checkout_viewed_listings}
	* {job_discount_listings} - update Discounts Plugin to 1.0.9

Improvements
* Added info for PayPal Withdrawal and Subscription credentials
* Added nonce verification for post new job and request
* Added extra checkboxes for single job page from admin
* Added text filter in several places
* Sort jobs by lowest and highest price
* Added Character Limits Options for job package title and description
* Added rating calculation for buyer profile
* Added options for min number review for user and job rating calculation
* Display the job title on the private messages page when it is sent from the job page
* Added newsletter lists for buyer and seller - update Account Segregation Plugin to 2.1.7
* Added gateway responses to admin order details

Bugfixes
* Fixed description field from post new job page in Firefox
* Fixed extra dropdown from post new job page
* Fixed job categories search
* Fixed responsive min price from job search page
* Fixed cropped single job images
* Fixed job validation for IE
* Fixed admin request deadline date
* Fixed mobile hover for deletion of the image from the post new job page
* Fixed image loading on jobs slider
* Fixed skills name with special characters

For more information, visit the following link: https://wpjobster.com/wpjobster-5-5-9

### v5.5.8 - 24 Ian 2020

Improvements
* Improved Automatic PayPal Withdrawal
* Hidden badge icons when badge system disabled

Bugfixes
* Fixed broken cards thumbnail
* Fixed minimum rating filter
* Fixed load more button on latest Visual Composer
* Fixed user description filter on the user search page
* Fixed packages price for Favorites page

### v5.5.7 - 20 Ian 2020

Features
* Added total number views for each job

Improvements
* Sort the jobs by the total number of job views
* Added packages price type to admin pricing settings menu, job values tab
* Added validation for the tagline field before being saved

Bugfixes
* Fixed subscription tab name size for mobile
* Fixed custom fields for packages
* Fixed date format
* Fixed extra fast delivery when job price type is package

### v5.5.6 - 13 Ian 2020 (https://wpjobster.com/wpjobster-5-5-6)

Features
* Added report system for requests, users and messages

Improvements
* Improved job report system
* Added option to allow HTML code inside emails
* Added separated buttons for PayPal withdrawal methods (manual and automatic)
* Added filter for languages list

Bugfixes
* Fixed user account graph values
* Fixed pending payment for a few gateways
* Fixed notifications counter
* Fixed copyright year
* Fixed job packages dropdown
* Fixed PayPal manual withdrawal
* Fixed load more users button position
* Fixed subscription eligibility
* Fixed subscription payment methods
* Fixed message content when is send from request page
* Fixed suggested jobs row on Safari
* Fixed extra amounts position
* Fixed email verification option
* Fixed admin orders date format
* Fixed category description raw HTML

### v5.5.5 - 18 Dec 2019

Improvements
* Added list for pending and completed topup orders
* Added option to cancel or process topup orders
* Added admin email about user withdrawal request
* Added admin emails about exchange rates
* Apply subscription feature if it gives you more than what your current level does

Bugfixes
* Fixed avatar from social network
* Fixed 'Mark all notifications as read' button action
* Fixed 'No payment methods available' notification message
* Fixed minimum rating filter
* Fixed distance position on job list view when 'simple' layout is enabled
* Fixed custom offer decline and withdraw action
* Fixed Site Health critical errors

### v5.5.4 - 11 Dec 2019 (https://wpjobster.com/wpjobster-5-5-4)

Features
* Added autoclose request system

Improvements
* Added tabs for my account pages
* Improved google maps autocomplete
* Added new tabs for requests (active, inactive, assigned, completed)
* Added filter for phone verification key sms message
* Added filter for uploaded files name
* Links shared through chat are now clickable
* Added label for request title when the message is send from request page
* Improved homepage and search pages performance
* Added custom permalinks for requests and news

Bugfixes
* Fixed earned value for new sellers
* Fixed load more posts
* Fixed packages selectors
* Fixed user company
* Fixed commissions table for old level page
* Fixed message form when order is expired
* Fixed login page fonts
* Fixed position of show/hide password option
* Fixed position of sort by for requests page
* Fixed functionality of sort by for requests page
* Fixed custom extra payment
* Fixed date after WP 5.3 update
* Fixed post new job and request option
* Fixed single job category position on mobile
* Fixed default WP register form redirection
* Fixed process order link
* Fixed text selecting inside chat
* Fixed order refund when autoclose
* Fixed custom extra price on shopping and sales pages

For more information, visit the following link: https://wpjobster.com/wpjobster-5-5-4

### v5.5.3 - 04 Nov 2019

Features
* Added support for booking system through an external plugin (will be released shortly)

Improvements
* Added new attribute (end_days_no) to show_request_list shortcode to display requests ending in 'end_days_no' value days
* Added new parameter to total_completed_jobs shortcode to display the completed sales or shopping orders
* Added start date to user vacation feature
* Added job price type to Sales and Shopping pages
* Improved chatbox feedback section
* Improved COD payment method (disabling the seller's jobs if COD is the only payment method or hiding the COD button if the seller credits do not cover admin fees)
* Improved homepage logged in search bar
* Improved theme security

Bugfixes
* Removed pending payment orders from pending confirmation section
* Removed chatbox message form when time expired
* Fixed long job title on user account pages
* Fixed various RTL issues
* Fixed responsive chatbox timer

### v5.5.2 - 14 Oct 2019

Features
* Added option: Enable browser location prompt
	* asks user to allow geolocation
	* prefills location fields
	* displays distance on cards and user profile
	* adds sort by distance
* Added option: Default sort by (auto, rating, distance, newest, oldest)
* Added option: Location Autocomplete API (TomTom or Google)
* Added minimum rating search filter

Improvements
* Improved site typography section
* Improved subscription page UI/UX and responsive
* Added background header colours to customizer
* Improved theme security

Bugfixes
* Fixed sales page counter
* Fixed lazy load for IE
* Fixed instant delivery validation
* Fixed price type filter from job search page
* Fixed clearable dropdown to post new pages
* Fixed user certification
* Fixed completed jobs from user profile page
* Fixed words filter
* Fixed max size for message attachments

### v5.5.1-pre.1 - 25 Sep 2019

Improvements
* New filters for countries, timezones, languages and phone prefixes
* Prevent files from secure directory from being accessed directly

### v5.5.1 - 02 Sep 2019

Features
* New shortcodes: list site users, count site users, count posted jobs, count posted requests, total spend amount, total completed orders (https://docs.wpjobster.com/category/124-shortcodes)
* Added support for mobile apps back button

Improvements
* Added new types and attributes to job, request and user settings custom fields
* Added new attr named 'include_job' to user_welcome_box shortcode to show post new service button
* Added current password fields when a user try to change the password
* Added admin emails about user subscriptions
* Added redirect to last page when the user logs in or registers
* Added new attributes to request list shortcode (category (id, slug or name), order (new, old or end), no (number of posts))
* Improved theme security
* Moved packages slider price type dropdown
* Added possibility to add social media panel to blog and news pages

Bugfixes
* Fixed head menu icons
* Fixed secondary menu when the theme is changed
* Fixed order expired cancellation
* Fixed message new line
* Fixed categories menu for mobile
* Fixed search bar corners for mobile
* Fixed search by location from homepage
* Fixed post new job page layout when job multiples are disabled
* Fixed order feedback for iPad
* Fixed responsive social media panel
* Fixed displayed messages when clicking load more
* Fixed user profile page title
* Fixed all categories page info
* Fixed login/register popup when editing the page
* Fixed mobile apps gateways return path
* Fixed post new job subcategory input
* Fixed pending order cancellation
* Fixed features settings for extras

### v5.5.0 - Jul 16th, 2019

Features
* Added support for user ban system (also includes user violations record) through an external plugin (will be released shortly)
* Added seller order rejection

Improvements
* Added option to allow comments on blog and news pages
* Added option to Media Settings to insert width and height value for image sizes
* Added option to set '0' value to user level and subscription
* Added request subcategory as separated dropdown
* Keep theme parent customizer settings when the child is activated

Bugfixes
* Fixed secondary menu (LTR and RTL)
* Fixed hover link colour
* Fixed 'custom rate' string translation
* Fixed '100% secure' string translation
* Fixed social share position
* Fixed compatibility with TinyMCE
* Fixed user reputation style
* Fixed custom offer price for admin
* Fixed filter validation text
* Fixed single job video thumbnail
* Fixed watermark when it is disabled

### v5.4.9 - Jun 20th, 2019

Improvements
* Added option to reset delivery days for requests
* Added completed jobs to user profile
* Added filters for user settings bank fields
* Improved user icons position
* Improved mobile list view appearance
* Improved colour compiler
* Removed user level badge icon for buyers

Bugfixes
* Fixed half star rating icon
* Fixed PayPal requests for withdrawal
* Fixed head menu icons
* Fixed contact button on mobile
* Fixed user profile icons
* Fixed hide send custom offer button for buyers
* Fixed delivery time and revisions for packages
* Fixed loading for chatbox buttons

### v5.4.8 - Jun 12th, 2019

Features
* Added image watermark system

Improvements
* Added messages for avg. response time and recent delivery when no data to display
* Added list/grid switch view on job categories, search by category, user profile and tags pages
* Added new chat toggle design and possibility to style from customizer
* Added filters for the main menu from the header
* Added gravatar when the user doesn't have an uploaded avatar
* Added site width option
* Moved Layout Settings to Customizer
* Replaced mobile menu images with Semantic UI icons
* Added menu on two columns option
* Added option to create a job without price
* Improved subscription page
* Added filters for password reset link
* Added customizer chat colours for unread messages
* Improved chat performance

Bugfixes
* Fixed chat responsive sidebar head background colour
* Fixed glitchy mobile menu for RTL
* Fixed submenu from dropdown menu added from admin
* Fixed total spent amount value
* Fixed login using google when reCaptcha is enabled
* Fixed login using LinkedIn if the application is new
* Fixed Vimeo thumbnail on cards
* Fixed social media jump on single job page
* Fixed removing the user from the sidebar when no conversation
* Fixed chat sound when the user does not exist anymore
* Fixed carousel play icon when a slide is changed
* Fixed wrong messages displaying on single request page
* Fixed responsive footer for tablets
* Fixed requests paragraphs
* Fixed user profile username ends in 's'
* Fixed chat redirects for Safari
* Fixed redirects while editing the page with a known page builder

### v5.4.7 - May 15th, 2019

Improvements
* Loader improved for chat message boxes
* Added option to disable the scroll to top button
* Added option to remove a user from sidebar (until a new message is sent or received)
* Added option to customizer to disable the 3rd group of users from the sidebar
* Added option to minimize the chat sidebar
* Added a small sound when a message is received

Bugfixes
* Fixed user contact button when the chat system is disabled
* Fixed tips and packages
* Fixed custom offer shortcode
* Fixed admin timezone
* Fixed notifications button for mobile

### v5.4.6 - May 8th, 2019

Features
* Added user chat system

Improvements
* Added location to job cards
* Added email notifications for dispute system
* Added notification number for disputes to admin menu
* Added option to abort arbitration
* Added option to go back to category page when on subcategory page
* Added preview window for unread messages

Bugfixes
* Fixed long username display
* Fixed hide password option
* Fixed various translation issues
* Fixed text color for textarea on new ticket page
* Fixed PHP7 fatal error
* Fixed subscription permalink
* Fixed homepage search by location
* Fixed level upgrade value in email
* Fixed responsive for visual composer pages
* Fixed current year for user certification and education

### v5.4.4 - Mar 27th, 2019

Features
* Added dispute system for job order

Improvements
* Added loading text to subscriptions, user balances, badges and levels button when update value is in process
* Added the possibility to use the theme if the license field is empty or the license is expired
* Added emails for both users when a buyer cancels the order because the delivery has been delayed
* Added 'support' label next to the username when an admin posts a message to order page
* Improved design for timer when order is late

Bugfixes
* Fixed request date validation

### v5.4.3 - Mar 18th, 2019

Improvements
* Added option to restrict location search by country
* Added option for default location search radius

Bugfixes
* Fixed admin email and SMS settings
* Fixed level commissions table
* Fixed RTL modals position
* Fixed RTL country icon

### v5.4.2 - Mar 14th, 2019

Improvements
* Added possibility to change cards icons from Options page
* Added new price limits for user level and subscription
* Added option for admin to insert in htaccess, codes for speed optimization
* Improved loading speed by minifying the styles and scripts
* Improved user tagline

Bugfixes
* Fixed responsive footer arrows
* Fixed various translation issues
* Fixed footer currency direction when is open
* Fixed feature page
* Fixed location autofill
* Fixed user level and user subscription
* Fixed buyer instructions
* Fixed subscription for mobile
* Fixed phone number validation
* Fixed user status
* Fixed title overlap with grid switch
* Fixed request edit from admin
* Fixed vimeo image on order page
* Fixed total spent amount for new users
* Fixed user timezone on order page
* Fixed description extra counter

### v5.4.1 - Feb 25th, 2019

Improvements
* Added max days to deliver to edit job page from admin
* New arrangement and items for footer
* New shortcode for categories list: [wpj_list_categories taxonomy=job_cat show_childs=0 hide_empty=0]

Bugfixes
* Fixed topup payments
* Fixed live notifications
* Fixed request delete action
* Fixed job location autofill

### v5.4.0 - Feb 20th, 2019

Features
* Added Brizy Page Builder support and demo content
* Added WYSIWYG as type for custom fields

Improvements
* Improved front-end and mobile responsivness
* Listed all subscription features to purchase subscription page

Bugfixes
* Fixed deformed YouTube thumbnails or nopic placeholders
* Fixed deformed my-account thumbnails
* Fixed request deletion
* Fixed location for request search
* Fixed user profile description
* Fixed user profile translations
* Fixed extra when currency is changed from checkout page
* Fixed various iOS issues
* Fixed graph info for COD payments
* Fixed autoscroll down for order page

### v5.3.8 - Dec 14th, 2018

Bugfixes
* Fixed PayPal pending order after WP 5.0.1 update
* Fixed job image deletion from admin

Improvements
* Added autocomplete slug for custom fields

### v5.3.7 - Dec 11th, 2018

Improvements
* Improved WP 5.0 Gutenberg compatibility
* Added a better required plugins management tool
* Improved onboarding experience and demo content import
* Improved translations setup experience
* Added cachebuster for updated login/register scripts

Bugfixes
* Fixed YouTube image for old videos
* Fixed user profile SQL errors
* Fixed multiple calendar inputs issues

### v5.3.6 - Dec 3rd, 2018

Improvements
* Added confirmation message after a request has been posted
* Added username filter for user profile page
* Added contact button filter for request page
* Added buy now button action filter for single job page
* Added filters for custom offer fields
* Added the username of the user who registered by referral link
* Allowed custom pages when locked to my account
* Allowed any character for skill name
* Extended number of letters accepted for domain when email is verified
* Store anonymous request draft and publish after login/register

Bugfixes
* Fixed black YouTube image on page load
* Fixed file name with apostrophe from order messages
* Fixed job custom field label
* Fixed double login for admin on HTTPS
* Fixed PayPal order cancellation
* Fixed blacklisted words filter
* Fixed instant delivery icon appearance
* Fixed let's meet icon appearance
* Fixed duplicated emails when account segregation is active
* Fixed subscription redirection link from mail after price is updated
* Fixed news slider arrows
* Fixed portfolio slider arrows
* Fixed various RTL issues

### v5.3.5 - Nov 15th, 2018

Improvements
* Added new request custom fields type: time, date, datetime
* Added request multiple categories option
* Added 'read more' option for job description
* Added job multiple video option
* Added existing tags list for request and job search
* Added date filter to request search
* Added option to search undefined date, budget and delivery for requests and jobs
* Added option to disable all attachments from private messages, custom offers and custom extra
* Added option to disable each page for featured jobs

Bugfixes
* Fixed custom offer send when user logout from another tab
* Fixed tooltips place
* Fixed style.css errors
* Fixed exchange rated redirect link
* Fixed admin order action redirect link

### v5.3.4 - Nov 1st, 2018

Features
* Added rate system for job price - sellers are now able to specify hourly, daily, weekly and monthly rate, in addition to fixed price for a job/service.
* Request page builder - administrators are now able to customize input fields for new service request submissions.

Improvements
* Added rejected fields for packages
* Added max file size option for message attachments
* Code cleanup

Bugfixes
* Fixed admin location autofill
* Fixed RTL job list view
* Fixed semantic ui icons for admin
* Fixed multiples for order confirmation page
* Fixed all categories page
* Fixed tab corner image position
* Fixed login page design

### v5.3.3 - Oct 16th, 2018

Improvements
* Added automatic conversion for PayPal unsupported currencies
* Added hooks for search fields on home, job and request pages
* Added assignment labels (post-state) for every assigned page in admin
* Added custom offer description to transaction page

Bugfixes
* Fixed phone verification code
* Fixed COD displaying default
* Fixed level tooltip
* Fixed review removal from admin
* Fixed request search
* Fixed unread deleted message
* Fixed job images
* Fixed pick up and drop off locations
* Fixed withdrawal PayPal checkbox
* Fixed mobile days slider
* Fixed admin extra mutiples
* Fixed earnings and spendings
* Fixed multiple orders by multiple clicks
* Fixed multiple emails for request modifications
* Fixed user search for admin orders, transactions, transaction messages and private messages
* Fixed description count validation
* Fixed expired orders
* Fixed post new job duplicated tooltip instructions
* Fixed receiver from admin transaction messages
* Fixed request custom offer for buyer
* Fixed instant delivery error when a new job is added

### v5.3.2 - Oct 2nd, 2018

Features
* New admin dahsboard for orders and withdrawal requests

Improvements
* New fields for request: pick up and drop off location

Bugfixes
* Fixed payment currency issues
* Fixed job draft listing in search or category
* Fixed order page duplicated messages
* Fixed max days option for post new/edit job page
* Fixed number of extras for post new/edit job page
* Fixed various RTL issues

### v5.3.1 - Sep 18th, 2018

Improvements
* Payments security improvements
* Added PHP version to Admin Information Menu
* Improved admin section
* Improved edit job page from admin
* Added COD payment for custom extra
* Slider for homepage cards (shortcode: [job_listings_4 type="slider"])

Bugfixes
* Fixed order page when a review is deleted
* Fixed orders in queue counter
* Fixed search for jobs with packages
* Fixed custom offer when user is not logged in
* Fixed COD with instant delivery
* Fixed user education and certification
* Fixed orders in queue counter
* Fixed "'s removal" from user profile page
* Fixed user level tooltip label
* Fixed COD - default disabled

### v5.3.0 - Sep 3rd, 2018

Features
* Added "tips" functionality - buyers are now able to tip sellers after a transaction. Additionally, configurable conditions have been added in the admin section based on the user levels and subcriptions (for example, only paid subscribers are able to send and/or receive tips; or, level 1 sellers cannot receive tips, only Level 2 & 3 sellers can receive tips).

Improvements
* Redesigned Post New/Edit Job Page
* Added all payments type to Summary Settings page
* Code cleanup

Bugfixes
* Fixed featured job payment
* Fixed autofill location
* Fixed max days range slider
* Fixed order page filters
* Fixed duplicated pm entry
* Fixed payment response

### v5.2.8 - Aug 20th, 2018

Bugfixes
* Fixed PayPal error on cancel and return link
* Fixed clearing issues

### v5.2.7 - Aug 14th, 2018

Improvements
* Added clear now and block clearing actions for orders in admin
* Added mark paid or mark cancelled actions for orders in admin

Bugfixes
* Fixed admin gateways settings
* Fixed user profile translation issues

### v5.2.6 - Aug 9th, 2018

Bugfixes
* Fixed duplicated messages on inbox
* Fixed all requests page

### v5.2.5 - Aug 8th, 2018

Features
* Added support for discount system through an external plugin (will be released shortly)
* New job cards/thumbnails style (activable in layout settings)

Improvements
* Added user Tax/VAT ID input
* Updated new user profile page slug to "user"
* Edit portfolio directly from your profile page
* Improved overall user profile page design and optimized code
* Slightly improved loading speed by stripping out scripts (work in progress)

Bugfixes
* Fixed various PHP7 warnings
* Fixed user recent delivery
* Fixed user average response time
* Fixed deactivated job issue
* Fixed sticky header scrolling
* Fixed package price validation
* Fixed various RTL issues
* Fixed small responsive issues
* Fixed layout for payment withdraw page
* Fixed various translation issues
* Fixed posts per page
* Fixed unfeaturing jobs from admin
* Fixed calendar
* Fixed user subscription

### v5.2.4 - Aug 3rd, 2018

Bugfixes
* PayPal IPN Security Fix

### v5.2.3 - Jun 22nd, 2018

Features
* Added option for theme beta versions

Improvements
* HTML W3 compliance
* Allow author to view pending reviews
* Prevent users from inserting same skill multiple times

Bugfixes
* Fixed average response time for user profile
* Fixed custom badges for user profile
* Fixed blurry user profile pictures
* Fixed last seen date
* Fixed situation when purchase job was deactivated
* Fixed some SQL errors
* Fixed shortcodes output buffer issues
* Fixed various translation issues
* Fixed various CSS issues

### v5.2.2 - Jun 14th, 2018

Features
* User profile page builder
* Added TOS and Privacy Policy on registration page option

Improvements
* Improved checkboxes style on registration page
* User account address fields internationalization
* Added option for delivery time
* Added option for site with
* Added option for badges custom icon
* Added option for min and max package price
* Added job custom fields to admin job page
* New shortcode: [buy_badge_button]

Bugfixes
* Fixed enable user country select option
* Fixed an issue when top up could be credited multiple times
* Fixed subcategory value on post new/edit job new version
* Fixed disabled custom offer
* Fixed custom offer checkout page
* Fixed RTL reCaptcha

### v5.2.1 - May 25th, 2018

Improvements
* Improved WP Social Login support (v2.3.3.2-wpj)
* Hide subcategory if category has no children

### v5.2.0 - May 23th, 2018

Features
* Post/edit job page builder

Improvements
* Added option to set minimum extra amount
* Added tags filter for search
* Added WYSIWYG for package description
* Hidden WhatsApp sharing button on desktop
* Improved support page style for mobile
* Improved further subcategory position in menu

Bugfixes
* Fixed job thumbnails and newsletter section for IE11
* Fixed AISOC role for user registration
* Fixed number of jobs displayed on different pages
* Fixed header category menu on scroll
* Fixed user profile cover image display issues
* Fixed request and payment SMS shortcodes
* Fixed mouse hover review stars
* Fixed date translation for user profile and request pages
* Fixed scroll bar issue when zooming the page
* Fixed character count for job description

### v5.1.1 - Apr 11th, 2018

Features
* Added option for changing extras and quantities on the checkout page
* Added option to mark a job as featured from the admin dashboard
* Added options for featured, let's meet and instant delivery icons

Improvements
* Added transaction ID to admin transactions table
* Added job and request preview for post author while it is under review
* Added default text for subscription template emails
* Added option for rating count on homepage cards
* Added forgot password email template
* Added filters on transaction page messages
* Added tabs on mobile for job packages
* Added Vimeo embed support for job video

Bugfixes
* Fixed calendar days order
* Fixed some links unclickable in some conditions
* Fixed subscription profile labels
* Fixed login/register modal hooks
* Fixed top up email message
* Fixed newline count in the WYSIWYG editor
* Fixed custom offer notification
* Fixed featured job cancellation
* Fixed homepage slider and login on IE11
* Fixed Android modal width while menu is open
* Fixed captcha login and register

### v5.1.0 - Feb 15th, 2018

Features
* Added Job Packages
* Added option for displaying last seen date on user profile page
* Added option for reCaptcha on login & register
* Added request custom offer button on user profile page
* Added email confirmation for withdrawal request

Improvements
* Added support for upcoming escrow payment options
* Added user rating with stars and count on single job page
* Added function_exists condition to the cards function (job thumbnails can now be completely replaced/customized)
* Added decimals support for custom offer price
* Added mandatory phone number option during registration
* Improved validation for job price
* Improved support for emoji
* Improved redirect from badge page to topup page if user balance is smaller than price
* Improved user online/offline status option

Bugfixes
* Fixed duplicate SMS notifications for admin
* Fixed font settings by updating Kirki
* Fixed sales dashboard issues with small amounts and dateranges
* Fixed duplicate reviews
* Fixed Facebook register issue
* Fixed jQuery issue for not logged in users
* Fixed search filters breaking thumbnails on some installations
* Fixed iOS 11 caret displacement on the login & register inputs
* Fixed order in queue if the payment is not complete
* Fixed payment gateway for custom extra report
* Fixed pending payment for job purchase report
* Fixed stripe amount on subscription page
* Fixed various translations
* Fixed list and grid views
* Fixed user balances pagination in admin

### v5.0.5 - Nov 28th, 2017

Features
* Added option for displaying other user level icons on thumbnails

Improvements
* Added new instructions fields for post new job and post new request request
* Calendar using Semantic UI for all of the old date inputs
* Improved custom offers modals performance
* Removed deleted jobs from recently bought section
* Removed pending jobs from my active jobs
* Updated Kirki plugin
* Updated ACF plugin

Bugfixes
* Fixed PayPal pending order issues
* Fixed new line issue for job instructions
* Fixed translations for calendar
* Fixed blacklisted phone prefixes filter
* Fixed uploader bug when wp-config.php is out of the installation folder
* Fixed rating metadata for jobs added from wp-admin
* Fixed MIME-types list which were breaking some downloads
* Fixed blank error when registering with wrong email
* Fixed search by location category inconsistencies
* Fixed color options for WP 4.7
* Fixed PHP warnings

### v5.0.4 - Nov 14th, 2017

Features
* Added option for email verification requirement

Improvements
* Improved header menu style
* Improved responsive sub-menu style
* Improved All Categories page style

Bugfixes
* Fixed auto-load posts
* Fixed theme icons when theme name is changed
* Fixed PHP short_open_tag
* Fixed user registered date
* Fixed customizer plugin required notification
* Fixed footer menu update from v4 to v5
* Fixed Options and Custom Fields pages
* Fixed small translation issues

### v5.0.3 - Nov 9th, 2017

Bugfixes
* Renamed wpjobster theme folder
* Fixed ACF on child theme
* Fixed fatal error on demo content import

### v5.0.2 - Nov 8th, 2017

Bugfixes
* Fixed jQuery undefined error

### v5.0.1 - Nov 8th, 2017

Improvements
* Added validation for subscription icon
* Added user status on search users page
* Added filters for serch users and single job pages

Bugfixes
* Fixed fatal error on database update
* Fixed Credits, COD and Bank Transfer payment gateway issues
* Fixed part of the Visual Composer frontend editor issues
* Fixed PNG file upload issues
* Fixed multilevel top menu style
* Fixed dropdown category on homepage search
* Fixed translations for user drop down menu
* Fixed wide logo overflowing for mobile devices
* Fixed icon size on levels page
* Fixed responsive menu issues for Android
* Fixed footer for Internet Explorer 11 and below
* Fixed homepage jobs display for Firefox

### v5.0.0 - Nov 1st, 2017

Features
* Rebuilt and optimized the complete front end with Semantic UI
* AJAX private messages and transaction page (no page refresh)
* Modals for various actions throughout the theme
* Transaction delivery countdown timer
* User menu replacing categories while on /my account/ pages
* Change package name option for subscription
* Search and various other filters for requests
* Grid/List switch for job listings
* Scroll on top button
* Allowed MIME-types settings
* Page assignments settings

Improvements
* Improved theme file structure
* Improved theme performance, especially frontend
* Improved admin settings structure
* Improved layout settings through wp customizer (more to come)
* Improved quantity input (can be directly edited, besides +/-)
* Links shared through messages are now clickable
* User profile page can now be customized
* Separated pending payment orders from active orders
* When changing email address, verification is required again
* Search users is ordering them by sales and rating
* Footer sticks to the bottom of the page
* With the account segregation plugin user search can be limited to sellers
* Disable update notifications if needed: define('WPJ_DISABLE_UPDATES', true);
* Update job slug and title after editing the job

Bugfixes
* Fixed private file download for Android app

### v4.1.7 - Aug 28th, 2017

Improvements
* Improved redirect after login
* Added max delivery time option for custom offer
* Added new error to prevent users from submitting subscription without selecting an option
* Added request custom offer button for buyers

Bugfixes
* Fixed various payment issues
* Fixed mandatory to upload pictures for jobs
* Fixed issues for job multiples
* Prevent not logged in users from accessing post new request page

### v4.1.6 - Aug 22th, 2017

Improvements
* Reorganized email and SMS settings
* Added hooks for withdrawals
* Subscriptions accept direct paymetns with 2Checkout and Authorize.net

Bugfixes
* Fixed PayPal pending order issues
* Fixed subscription fees feature
* Fixed submit review after error popup
* Fixed a few emails
* Fixed location radius search

### v4.1.4 - Jul 22th, 2017

Improvements
* Added instructions for 2Checkout payment gateway
* Added payment collected log for custom extras
* Included custom extras in pending incoming payments
* Removed pending incoming payments when clearing is instant
* Removed not delivered orders from pending incoming payments

Bugfixes
* Fixed response HTTP status for Ebanx payment gateway
* Fixed various payments log inconsistencies and currency bugs

### v4.1.3 - Jul 14th, 2017

Features
* WYSIWYG editor for job description
* Automatically grab profile picture from the social login

Improvements
* Added admin email about pending bank transfer payments
* Added translations for the payment methods
* Added the transaction ID on the payments page
* Added wp settings week starting day option to calendars
* Added separator option for CSV export
* Added company name to the live search
* Added hooks for custom payment buttons
* Allow decimals for featured job price
* Removed disabled emails from user email settings
* Removed duplicated job approval email
* Removed paused jobs from user profile

Bugfixes
* Fixed disabled levels for subscription upgrade
* Fixed private messages missing table issue
* Fixed favorite jobs missing table issue
* Fixed requests displaying the name instead of the username
* Fixed post new request tooltips issues
* Fixed google undefined JS error
* Fixed RTL half star rating issue

### v4.1.2 - Jul 5th, 2017

Features
* Lifetime subscriptions

Improvements
* Added active subscriptions list
* Added counters for unapproved jobs and requests
* Added delivery time range option
* Added company field option
* Added rejection reason for job attachments
* Added custom offer reviews to the job page
* Added configurable limits for extra fast and additional revision multiples
* Added filter for job purchase gateways buttons
* Added hooks for external SMS gateways
* Added hooks for gateways custom messages
* Added 0 delivery days in admin for instant jobs
* Added let's meet for requests
* Improved the live search ux
* Included fees and taxes on total spent
* Prevented multiple clicks on mark as delivered
* Prevented multiple clicks on feedback submit
* Prevented users from selecting earlier request end date
* Prevented users from using lower budget to range
* Removed job quantity when no multiples
* Removed processing fees when not applicable
* Removed the payment type prefix from PayPal order details

Bugfixes
* Fixed unclickable +/- for multiples
* Fixed various PHP errors
* Fixed subscription page links
* Fixed search user page translations
* Fixed social registration fields issues
* Fixed job preview issues
* Fixed long description display issues
* Fixed inconsistency on request owner buttons
* Fixed country flag for user search
* Fixed search shortcode style for Safari
* Fixed user reviews pagination in admin

### v4.1.1 - May 24th, 2017

Features
* Search for requests
* New shortcode: [advanced-search]
* Allow users to change their email address

Improvements
* Removed a few plugins and included their functionality in the theme
* Removed deprecated options
* Removed the current job from other jobs by
* Improved payment status update when returning from PayPal
* Improved location search radius calculation
* Improved IP location detection
* Added per level enable/disable options for extra fast and additional revision
* Added more labels for PayPal gateway settings
* Added total spent on the shopping page
* Added subcategories in alphabetical order
* Added instructions for post new request page
* Added the delivery time for each extra on job page
* Added admin notification when a job or request was edited
* Added request title generated from description if empty
* Added more hooks through the theme

Bugfixes
* Fixed Stripe duplicate payment when hitting the back button
* Fixed user type field position for account segregation
* Fixed expected delivery with extra fast
* Fixed file uploader issues for profile image
* Fixed default country flag issues
* Fixed private messages special characters
* Fixed report job title special characters
* Fixed custom offer title in transactions
* Fixed my ratings sender name
* Fixed subscriptions transaction log issues
* Fixed empty job preview container
* Fixed javascript cache issues
* Fixed timezone in admin settings
* Fixed cover image style for blog and news
* Fixed some number formatting issues
* Fixed date format for sales report
* Fixed sales report translations
* Fixed small CSS and responsive issues
* Fixed small RTL issues

### v4.1.0 - Apr 25th, 2017

Features
* Sales Reports for admin with CSV export
* Extra fast delivery
* Additional revision
* User portfolio
* User page WYSIWYG editor

Improvements
* Live notifications performance improvements
* Subscriptions accept direct paymetns with PayPal and Stripe
* Stripe checkout multuple languages
* Stripe save credit card info
* Default user country for register
* Default user timezone by country
* Added custom offer input limits
* Unique user phone numbers
* Jobs need at least 3 ratings in order to display stars
* Option to lock user to my account until email verified

Bugfixes
* Fixed https font issues
* Fixed https issues for thumbnails uploaded during http
* Fixed profile picture ratio in some cases
* Fixed emails for requests issues
* Removed unused YouTube fields from admin
* Fixed small translation issues
* Fixed small CSS and RTL issues
* Fixed country detection issues for some servers
* Fixed break rows after 80 chars on emails
* Fixed sort by rating
* Fixed PayPal checkout text encoding

### v4.0.5 - Mar 20th, 2017

Improvements
* Order my account jobs by date instead of id

Bugfixes
* Fixed PHP7 incompatibility
* Fixed layout on transaction page when viewed by an admin

### v4.0.4 - Mar 18th, 2017

Features
* Custom extras
* Job preview (public downloads)
* Dedicated post new request page

Improvements
* Added the hooks to the transaction page for the invoices plugin
* Added load more to new pages and improved it on the other pages
* Subscription user type upgrade feature (works with account segregation)
* Subscription levels can be disabled
* Made order id obfuscator function pluggable
* Merged level settings into user levels admin page
* Made timezone select labels translatable
* Added new error to prevent users from posting wrong youtube urls
* Styled the social login buttons for all of the networks
* Removed the 0 processing fee label if it is disabled

Bugfixes
* Fixed random jobs displaying duplicated entries on load more
* Fixed lock to my account until phone number verified
* Fixed job name not updated when paying with Stripe
* Fixed hash issues with 2Checkout
* Fixed missing qTranslate language switchers
* Fixed HTML encoding issues with AIO Support Center emails
* Fixed the IP detection function
* Fixed seveal PHP notices and warnings
* Fixed a few translation issues
* Fixed small CSS issues

### v4.0.3 - Feb 20th, 2017

Features
* User email settings
* Jobster menu to admin bar
* Prefix selector for phone numbers

Improvements
* Added necessary hooks for jobster affiliate plugin
* Phone number option for static register page
* Centralized site fees options
* Filter job and user profile descriptions by blacklisted words
* Added tabs to my account page
* Added option for automatically cancelling pending orders
* Improved backend options
* Order posted jobs by date

Bugfixes
* Fixed duplicated posts when random is enabled
* Fixed upload background button on user profile page
* Fixed missing thumbnails on the search page
* Fixed reviews not displaying sometimes
* Payment gateway fixes
* Responsive style fixes
* Translations fixes
* RTL style fixes

### v4.0.2 - Feb 2nd, 2017

Features
* Report job feature
* Display job instant delivery files for admin

Improvements
* Search users page initial query, load more, style, prioritize by sales
* Added pagination to several jobster admin pages
* Updated mark payment completed emails

Bugfixes
* Fixed missing initial transaction message
* Fixed submit feedback issues for non-latin languages
* Fixed live tax and fees calculation for buy buttons and total
* Fixed secure downloads for instant job
* Fixed register redirection
* Fixed Twilio SMS gateway errors
* Fixed delete buttons from admin private messages
* Fixed notifications page checkboxes style
* Fixed instant delivery input style
* Fixed revolution slider buttons style

### v4.0.1 - Jan 25th, 2017

Features
* Added live search suggestions, including user search
* Added user editable timezones
* Added file uploader option for requests
* Added mark notifications as read
* Added description on category pages

Improvements
* Allow other file types on post/edit job pages
* Added 'wpjobster_run_on_transaction_page' hook to transaction page
* Added total on pay for featured page
* Added option for need to have at least one posted job limit
* Added options for displaying budget and max delivery days on requests
* Moved options for requests on a different tab

Bugfixes
* Fixed transaction page broken after seller's feedback
* Fixed translations for Online/Offline
* Fixed active tab in admin transactions
* Fixed receiver column for admin transaction messages
* Fixed styling issues on thumbnails for long job titles
* Fixed footer styling on tag page
* Fixed an issue when max number of pictures option was empty
* Fixed several PHP notices and warnings
* Hidden buyer process button for bank transfer transactions

### v4.0.0 - Jan 17th, 2017

Features
* Gateways API v2
* Any gateway works now with top up and featured jobs
* Allow admin to see any transaction page
* Search for users

Improvements
* Added PayPal loader when redirected to the site
* Added PayPal IPN log for debugging
* Removed pending and failed orders from the active tab
* Removed notifications for pending orders
* Make it clear for seller that the buyer has chosen to pay cash on delivery
* Improved admin orders table labels
* Improved WP Better Emails compatibility
* Limited recent bought to jobs
* Updated empty email templates

Bugfixes
* Fixed total price on transaction page for COD
* Fixed reset password issues
* Fixed long usernames, titles and categories
* Fixed feedback message breaking after some special characters
* Fixed duplicated emails about job purchases
* Fixed displayed currency when clicking load more
* Fixed small issues with vacation mode
* Fixed admin quick edit job

### v3.9.4 - Dec 29th, 2016

Features
* Vacation mode

Improvements
* Newlines on private messages and transaction messages
* Included empty option to category select inputs
* Allowed empty job price and consider it zero
* Relabeled column headers in admin orders table
* Changed the link for post new request on home logged-in
* Phone number filter function can be redeclared in child theme
* Prepared the theme for the upcoming invoices plugin

Bugfixes
* Fixed Stripe payments bug for admin account
* Fixed Stripe failed payment redirect
* Fixed sending emails and updating status when editing job with quick edit
* Fixed price position when using dropdown values on post new job
* Fixed headings for the transaction messages table in admin
* Fixed category subcategory sequence on job page for RTL
* Fixed job_name shortcode for SMS templates
* Fixed characters counter initialization when loading the edit job page
* Fixed email notification for new purchases when admin marks transaction as paid
* Fixed wrong subcategories list displayed on edit job page
* Fixed title tag repeated with Yoast SEO plugin
* Fixed featured job label displayed twice on thumbnail

### v3.9.3 - Dec 12th, 2016

Features
* New shortcode displaying jobs from a certain category: [list_jobs]

Improvements
* Created post new request page and added it in the user menu
* Removed empty thumbnails from my requests page
* Disabled pending purchase emails by default

Bugfixes
* Fixed PayPal pending order issues
* Fixed expired license issues
* Fixed requests shortcodes
* Fixed PHP errors

### v3.9.2 - Nov 28th, 2016

Bugfixes
* Fixed compatibility issues with PHP older than 5.5
* Fixed custom offers purchase links
* Fixed translations for free jobs

### v3.9.1 - Nov 24th, 2016

Improvements
* Improved the multiple checkbox style
* Improved the post/edit job pages for easier customization through child themes
* Added default text for post/edit job pages tooltips
* Removed deprecated code and fixed some HTML errors
* Added unique IDs on the gateway links for easier targeting through CSS
* Included default translations: ar, da, de, es, fr, pt, pt_BR, sk

Bugfixes
* Fixed custom offers purchase links
* Fixed confirm password bug on Safari
* Fixed logo position for the login/register pages

### v3.9.0 - Nov 9th, 2016

Features
* Job multiples (or quantities)
* Live notifications (without page refresh) for messages and orders
* Budget and expected delivery fields for the requests

Improvements
* Reorganized user dropdown menu
* Replaced the old dynamic thumbnail function with a new, performance oriented one
* Improved Stripe checkout page on mobile devices
* Improved Dropzone image uploader style
* Added lazy loading to the job page slider for better performance
* Added support for buyer/seller account segregation through an external plugin

Bugfixes
* Fixed login required bug on category and some other pages
* Fixed user profile page meta data for social sharing with image
* Fixed user avatar and several other image uploads when Amazon S3 offload is active
* Fixed the issues with Emoji characters on regular UTF8 tables

### v3.8.2 - Oct 14th, 2016

Features
* Integrated support for storing files and media on Amazon S3
* Secure download links for private files shared on transactions or messages
* Option to redirect to a custom page after registration

Improvements
* Better qTranslate-X compatibility
* Responsive improvements

Bugfixes
* Fixed the license activation on multisite networks
* Fixed the issue when you had to click activate license twice
* Hidden the import demo content notice for old installations and made it dismissible

### v3.8.1 - Oct 6th, 2016

Features
* Automatic setup/installation package
* Demo content importer for new installations

Improvements
* Updated the default option for min price with 0 instead of empty
* Display user phone number in wp-admin users
* RTL for the user stats charts
* Rewrote the code behind the shortcodes for better Visual Composer compatibility
* Changed labels for default gateway success/failure pages to avoid confusion
* Responsive fixes
* Proper enqueue of the base font for better performance

Bugfixes
* Fixed Free label visual bug for prices over 1k with thousands separators
* Fixed tooltip for dropdown price on the post new job page
* Fixed HTML emails if beter emails plugin not enabled
* Fixed tax/fees issues with pending orders
* Fixed search button style on iPad
* Fixed login/register text overflow when social login is not enabled
* Fixed category dropdowns and extras issues on some installations
* Fixed levels page content not displaying bug
* Fixed display of large category names on job & search pages
* Fixed WP & PHP Notices regarding deprecated functions

### v3.8.0 - Sep 19th, 2016

Features
* Automatic theme updates
* Free jobs

Improvements
* Submit buttons style in Jobster settings

Bugfixes
* Fixed feedback response from seller not working
* Fixed custom offers not being stored

### v3.7.2 - Sep 8th, 2016

Bugfixes
* DropzoneJS Cover issues

Improvements
* Updated .pot file for translations

### v3.7.1 - Sep 2nd, 2016

Features
* Bank Transfer payment gateway
* Admin can mark the payment status as completed

Improvements
* Display payment gateway on the admin orders table

Bugfixes
* Fixed refunds after cancellation
* Fixed notifications read mark

### v3.7.0 - Aug 28th, 2016

Features
* Global translations folder compatibility
* New default file uploader for job images: DropzoneJS
* Requests can now be managed by users on my-requests page
* Email notifications for requests
* User profile picture in admin side

Improvements
* Requests have now single pages displaying the offers
* Old /request page can now be created using shortcodes
* Pending orders can now be processed or cancelled
* Display payment status on the admin orders table
* Cover image can now be managed by admin
* Improved static Login & Register pages (wp-login.php)
* Job page and user profile page social sharing snippet with correct thumbnail
* Removed deprecated theme options

Bugfixes
* Captcha by BestWebSoft v4.2.4  compatibility fix
* Several PHP notices and warnings fixed
* Messages page compatibility with PHP7
* Braintree small issues fixed
* COD payment gateway flow fixed
* Fixed fatal error on theme activation or db update for some servers
* RTL style fixes
* Fixed custom color for slider register button
* Strings


### v3.6.2 - Jul 27th, 2016

Improvements
* Format Numbers for Tax & Fees
* Transaction Status Label
* PayPal Gateway response
* Stripe Gateway response
* Advanced Search Shortcode Responsive
* Code cleanup

Bugfixes
* Fixed Tax & Fees for the new gateways methods
* Fixed credits payment status and flow
* Fixed redirect to transaction page after payment
* Pending status when saving as draft from admin
* Processing Fees < 1 not appearing on dropdown
* Extras on the transaction page

### v3.6.1 - Jul 20th, 2016

Bugfixes
* JS not working on some mobile devices

### v3.6.0 - Jul 16th, 2016

Features
* Payment Gateway Plugin API
* Migration from ACF4 to ACF5
* Shortcode for Search bar on the slider [advanced-search-slider]
* Debug mode: define('WP_JOBSTER_DEBUG', true); (NOT recommended in production!)
* Added pagination to the admin transactions page

Bugfixes
* Fixed PHP and WP deprecated functions
* Improved compatibility with PHP7
* Fixed some SQL errors
* Removed old Jobster deprecated functions
* RTL style fixes
* Fixed some inconsistencies in the admin settings
* Fixed some inconsistencies in the default email templates text
* Braintree gateway fixes and default table creation
* PerfectMoney gateway currency issues fix
* Theme main color works now on checkboxes, select iputs and several other elements
* Replaced theme color with green for success messages
* Remove select placeholders from options list
* User profile page works now for usernames with spaces
* Fixed the scroll jump when the header gets sticky on top
* Fixed missing job information on the transactions admin menu

### v3.5.0 - May 17th, 2016

Features
* Visual Composer integration
* Charts for advanced user stats
* Braintree Gateway
* Cash on delivery
* Login with the email
* SMS notifications default english templates

Bugfixes
* Feedback response notification fix
* Countries and languages from edit account page translatable
* Fixed blank logout page caused by latest WP update
* Fixed translation issues with the Ajax Login plugin + Loco Translate

### v3.2.0 - April 27th, 2016

Features
* All notifications page
* Old notifications improvements
* User online/offline status option
* Percentage option for processing fees
* The request input is refilled automatically after login
* Improved gateway functions
* INIPay Gateway - BETA
* Blockchain Gateway
* PerfectMoney Gateway
* Webpay Gateway

Bugfixes
* HTTPS for YouTube thumbnails
* Category search filter bug
* Character limits are working now with 0
* Featured job dates bugs
* Processing fee and tax included in total in shopping/sales pages
* PHP Warnings/Notices fixes
* Translation fixes
* RTL styling fixes

### v3.1.7-pre - April 7th, 2016

Features
* Display map option for the end user
* Google Maps API Key option
* Numeric fields (prices) can also use decimals
* Use the excerpt for news loop

Bugfixes
* Include paths updated in order to work with child themes
* Long titles breaking the responsive layout
* Instructions displaying on all the extra inputs at once
* Remove lazy loading icon behind transparent thumbnails
* Random jobs not working when featured jobs was disabled
* Removed potential error when automatically disabling a plugin
* Fixed PayUMoney variable typo

### v3.1.6 – March 24th, 2016

Features
* Tax is now country-based
* Responsive menu works now with CSS3 transitions for improved performance

Bugfixes
* Fixed the price position on the thumbnails
* Fixed the bug where orders couldn't be inserted on databases with custom prefixes
* Fixed side menu functionality and style for mobile devices
* Fixed checkboxes display on mobile devices
* Fixed job images display on mobile devices
* Fixed feedback response input not displaying on the transaction page
* Fixed the bug where admin couldn't delete job images
* Recently viewed jobs are now per user
* Fixed some issues in Firefox related to long titles and descriptions
* Fixed job thumbnails size on mobile devices
* Fixed input focus styles and custom colors
* Fixed PayUMoney redirect bug

### v3.1.5 – March 18th, 2016

Features
* Updated the blog archive style and implemented a load more button
* Updated default page template and added a new widget
* Updated the colour of the links on the payments page, because clients reported they were not obvious enough
* Updated the job page to display “instant” instead of “1 day” for instant jobs
* Added a new icon to the instant jobs thumbnail
* Updated all the numeric inputs in order to accept only numbers
* Updated the youtube video in order to not show any related videos, annotations or info
* Implemented Lazy load thumbnails option
* Updated login/register plugin in order to autofocus the first input when popping up

Bugfixes
* Fixed the bug where the news archive was not working
* Fixed the bug regarding the user level badge on the user profile page
* Fixed the bug where the user profile picture was wrong on the job feedback section
* Updated the style for the subscription icons
* Fixed the bug on the advanced search, where delivery was set by default to 0 instead of 30
* Updated the url encoding for the links sent in the emails, to prevent long ugly links for non-standard charsets
* Fixed translation for the “Let’s Meet” label on the job thumbnails
* Changed shipping price string from uppercase to regular caps
* Updated the styling of the checkboxes and prices on the extra services lists
* Fixed the bug where you could save a shipping price containing strings other than numbers only
* Fixed the bug where you couldn’t save tax with value “0”, even if it was disabled
* Fixed the bug where the YouTube video was not displaying when there was no image uploaded for the job
* Fixed the bug where the YouTube video was not in center of it’s container on the responsive version of the site
* Other RTL and general style fixes

### v3.1.0 - March 4th, 2016

Features
* Implemented ability to define Sales Tax percentage (%) which will be charged to buyers on each transaction
* Extended “Request Service” function with date, location and Google maps (Let’s meet)
* Implemented Google Maps for Jobs with specified locations
* Added the News post type in functions, disabled GD Post Types
* Rearranged options in General Settings
* Terms of Service can now be displayed in a separate box (container which can be scrolled) within a page

Bugfixes
* CSS Fixes
* 404 Page responsive
* Private Message not lost anymore if there is any error
* Phone verification errors
* Subscription Icon URL fixed
* Transaction logs currency and translation fixes
* Fixed several issues on the image uploader

### v3.0.0 - February 1st, 2016

* Subscriptions
* Top Up Account Balance
* Processing Fee for Buyers
* Load More News
* Enable/Disable News Box

Bugfixes
* CSS Fixes
* RTL Fixes
* Responsive Fixes
* Transactions History Translation Fixes
* Decimals Option not used on some values

### v2.8.2 - January 22nd, 2016

Bugfixes
* My Account Stats Bar
* Featured Dates
* Gateways Fixes
* File Uploads Fixes
* Translation Fixes
* CSS Fixes
* RTL Fixes

### v2.8.0 - December 22nd, 2015

* Statistics Bar regarding payments
* Redesigned Logged in Home Page
* Redesigned Job Display Grid
* Admin options for colors
* Admin options for level icons

Bugfixes
* Payza Live BUG Fix
* Fixed File Uploader Conflict with other plugins
* Fixed instances where user avatars were not being displayed on feedback sections
* Search Radius fixed (query for radius, not just coordinates)
* Homepage broken by missing featured categories
* Admin Ajax links on HTTPS
* Unsafe Scripts Admin
* Profile Info Page Save Bugs
* Rating response special characters

### v2.7.1 - November 13th, 2015

* PayPal withdrawal testing and improvements

Bugfixes
* RTL Fixes and better CSS organization
* CSS Fixes for Easy Social Share 3

### v2.7.0 - November 12th, 2015

* Database Update notice in admin
* All the Payment Gateways updated and tested
* Payumoney Payment Gateway Implemented
* Increased number of extras to 10 with options to set max for each user level
* All the feedback boxes are now using AJAX to load more feedback entries
* Sellers can respond to the Buyer's feedback
* Feedback box displayed on the User Profile page
* Improved style of the User Profile page
* Character Limits Options for most of the textareas through the site
* Improvements for the instant delivery file functionality
* Allow decimals in job prices and extras
* Option for thumbnails with video icon
* Option for the Audio file size
* Option to display requests on the homepage
* Pagination to a few admin pages like orders or reviews
* Button to pay with the account balance instead of automatically charge
* Exclude post types which should not be translated

Bugfixes
* Payza bug fix for when the buyer is closing the payment window before being redirected to the site
* Updated Stripe gateway for zero-decimal currencies
* Fixed a bug caused by Yoast SEO which prevented displaying error messages
* Messages not sent when multiple pages were open
* Admin menu save not redirecting to correct tab
* Blurry thumbnails on the file uploader
* Delete the temporary files after complete uploading
* Thumbnail image size increased in order to display better on mobile devices
* Register button not working when the social login buttons were not displayed
* Several other strings, translations and CSS fixes

### v2.6.2 – October 9th, 2015

* Added loading image to register button when registration is in process. Also disabled the Register button when process is going on.

### v2.6.1 – October 2nd, 2015

* Ability to force users to accept Terms & Conditions (checkbox) before posting a new service/job
* Requests are now being displayed based on the category they were submitted to
* Uploader Style Changes & Bugfixes

### v2.6.1 – October 1st, 2015

* Implemented new file uploader which can handle multiple images
* Ability for the users to upload Job cover photo
* Option to lock users on ‘my account’ page until phone number is verified
* Revolution Slider overlay and buttons fix
* Characters counter fix for newlines
* Wrap edit job page in a function for use in childthemes
* Include ACF in theme files
* Location radius – users can filter jobs within xx amount of miles/kilometers from their location
* Gateways security & bug fixes

### v2.5.8 – September 23rd, 2015

* Fixed textdomain translation issue
* Delivery Time bugfix related to Instant Delivery function

### v2.5.7 – September 22nd, 2015

* Minor bugfixes on the ‘post new job’ page
* Instant delivery feature implemented

### v2.5.6 – September 12th, 2015

* ALT Tags on stars images
* Fixed bug when counting non-standard characters

### v2.5.4 – September 5th, 2015

* Audio Files Support implemented – users can now upload audio files on the job/service pages
* Implemented ability to enable/define Tags for each job
* Your users can now send out physical products as well as charge for shipping.

### v2.5.2 – July 30th, 2015

* SMS Number Confirmation – ability to enable mobile number verification during registration process – based on the Twilio SMS Gateway
* PayPal semi-automatic withdrawal – select and process all of the withdrawal requests at once
* Auto-scroll (auto-load) feature for pages that display job/service listings.

### v2.5.0 – July 19th, 2015

* SMS Notifications – enable SMS notifications for all of your users. There will be no more missed offer requests, private messages, job deliveries, etc.  Based on the Twilio SMS Gateway
* Implemented clearing period (starts from the moment transaction is marked as completed) before the funds become available for withdrawal – Security feature to protect marketplace owners from chargebacks.
* Several Bugfixes (CSS, RTL, Translations)

### v2.4.8 – June 29th, 2015

* Jobs Order on Homepage: Ascending, Descending, Random
* Several PHP Bugfixes
* Plugin compatibility updates
* Ability to translate email notifications to be sent to users in the appropriate language.

### v2.4.4 – June 2nd, 2015

* Support all currencies from OpenExchangeRates
* Email confirmation – each new users is prompted to confirm their email address. Once the email address is confirmed it is displayed on their profile “email confirmed” along with the icon.
* IP geo-location to display content to users in the appropriate language.

### v2.4.3 – May 15th, 2015

* Instant job clear when clearing period set to “0”
* UI improvements and bugfixes
* Date internationalization through the theme – you can now select to display the date based on your geographic location and/or target market
* Ability to leave comments to sellers when approving jobs as to reasons why the service has been denied. Especially useful when you would like to provide pointers to quality sellers.

### v2.4.1 – May 4th, 2015

* Featured Jobs – implemented ability for users to pay for a featured spot on the home/category/subcategory pages. Ability to set the price and time interval from the admin section
* Responsive functionality added
* Implemented several new Payment Gateways
* Implemented filter for email addresses and URL’s in the messaging system as well as the transaction pages. Text for the warning message can be defined in the admin section. Additionally, you can create your own custom trigger words along with the warning messages.
