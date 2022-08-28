# Animal Project
Using PHP, please create a command line application that will accept a name and an animal type. On receiving the input, the application should respond with an appropriate message from that animal. For example, 

*php AnimalProject.php "Mr Pickles" cat*

Mr Pickles says "meow" 


- The application must use object inheritance for its implementation 
- The application should support at least the following animals: 
- cat (output: <name> says "meow") 
- dog (output: <name> says "woof") 
- cow (output: <name> says "moo") 
- The application should not fail when an unknown animal name is received


---

### prerequisites
 - Php version 8.1
 - phpunit

---

### scenarios run

1. create one animal:  php AnimalProject Garfield cat
2. create two animals: php AnimalProject Garfield cat Bossy cow
3. create three animals one of whom is imaginary: php AnimalProject Fantasy unicorn Garfied cat Bossy cow

Note.  You will notice an interesting error message when seeing the output for 'Fantasy unicorn' I'd like to discuss during the interview





