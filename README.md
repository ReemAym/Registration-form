Design a registration web page that inserts a user data into MySQL database, the details are as follow:
1. The form includes a user personal detail: full_name, user_name, birthdate, phone, address, 
password, confirm_password, user_image, and email. Use three appropriate client-side 
validations. (All fields mandatory, email and birthdate and full_name are correct types, 
password match with confirm_password and is at least 8 characters with at least 1 number 
literal and 1 special character) [Client-side VALIDATIONs]
2. Include a header and footer pages of your own design inside the registration webpage. 
3. Maintain a User’s table in the database to check if the username is not registered before. If the 
user inputs a username that exists before, the form alerts the user to choose another username
[Server-side VALIDATIONs]
4. Upload the user image (the image will be stored on the server, while the image name is stored 
in the database).
5. Beside the birthdate field add a button that checks actors born in the same day using a thirdparty MDBI API “https://rapidapi.com/apidojo/api/imdb8/” (shown in the figure below)
You need to show the list with actor’s names born on the same day.


Design a Laravel project to accommodate the same feature implemented in assignment 1. In addition,
your Laravel project will apply the following:
1. The form includes sending an automatic email when a new user is registered. The email title is 
“New registered user” and the email content is “A new user <username> is registered to the 
system”.
2. Include one automated test function using Laravel testing.
3. Apply Laravel multi-language feature. Your webpage must support two languages (English is 
necessary). The second language is your choice (we recommend Arabic).
