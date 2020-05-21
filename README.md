# aveosoft

Installation Guide:
Step-1: Download 'aveosoft' folder.
Step-2: Put that folder into '../XAMPP/htdocs/' directory.
Step-3: Import Database 'aveosoft' to phpmyadmin.
Step-4: Open your browser and type "localhost/aveosoft/" it will automatically redirected to index page.

Task Guide:

There are two task given which are describe below:

Task: 1. create a php script to find all HTTP/HTTPS links from text documents and generate
<a> tag for each link.
  
Example Document: Lorem Ipsum is simply dummy text of the printing and typesetting
industry. Lorem Ipsum has been the industry's http://link1.com standard dummy text ever
since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
type specimen book. It has survived https://link2.com not only five centuries, but also the
leap into electronic http://link3.com typesetting, remaining essentially unchanged. It was
popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
passages, and more recently with desktop publishing software like http://link4.com Aldus
PageMaker including versions of Lorem Ipsum.

When you input this text into your script it should generate following output:
<a href=” http://link1.com ”>http://link1.com</a>
<a href=” https://link2.com ”>http:s//link2.com</a>
<a href=” http://link3.com ”>http://link3.com</a>
<a href=” http://link4.com ”>http://link4.com</a>


Task 2. Create a PHP script to generate an HTML form for any given mysql table.

Like, If there is a table example1 in MySql with field:

Name varchar(20)
Age int(3)
Address varchar(100)
Mobile varchar(10)

When we pass table name in script it generates html input form for each column, when user
submit form it should insert into table example1. Make sure the script works for any table.
