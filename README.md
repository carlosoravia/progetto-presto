## <h1 style="color:red">About the project</h1>
<br>
This was our final project for Aualb, an Italian bootcamp where we learned Laravel and web development, in particular for fullstack developers.
We added a dark mode (using vanilla JavaScript), this will create a coockie who memorize whitch mode was selected by the user, so when he will return on our site this will display his favourite colors.
<ul>
    <li>The user who isn't logged yet will be able to visit the site and views articles wrote by other logged users. </li>
    <li>The user can log and create articles, those article have to be accepted by a user who is an amministrator.</li>
    <li>The articles can contains multiple images, a title, a sub title, a caption and a price.</li>
    <li>The user can make a request to be revisor, this request can be visualize in the mail box of the amministrator, in our case on mail trap whitch simulate  an amministrator inbox.</li>
</ul>

<br>

The revisor have his own dashboard where he can check the articles, to make this simple we had implemented Google's API for an AI who can check: 
<ul>
    <li>if there are faces on the phostos they will be cover up.</li>
    <li>if there's violece or sensitive content the revisor will see a red flag on those voices, if they're ok there will be a green flag.</li>
</ul>

<br>

## How we made it:
 <ul>
    <li>Backend: PHP</li>
    <li>Frontend: HTML / CSS / JavaScript</li>
    <li>Framework: Laravel</li>
    <li>Libraries: Swiper / Bootstrap</li>
    <li>Database: MySQL</li>
</ul>

## How to clone it 

<ol>
    <li>cp .env.example .env</li>
    <li>composer install</li>
    <li>php artisan key:generate</li>
    <li>npm i</li>
    <li>php artisan migrate</li>
    <li>php artisan storage:link</li>
</ol>

<h5>After that:</h5>
<ol>
    <li>Set your database in the .env file</li>
    <li>Set Api of Mail Trap to let revisor with e-mail</li>
</ol>




