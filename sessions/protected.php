<?php
    include 'init.php';
    if(!isset($_SESSION['user'])){
        header ('location:sessions.php');
    }
?>

<p>
    In computer science and networking in particular, a session is a temporary and interactive information
    interchange between two or more communicating devices, or between a computer and user (see login session). 
    A session is established at a certain point in time, and then 'torn down' - brought to an end - at some 
    later point. An established communication session may involve more than one message in each direction. 
    A session is typically stateful, meaning that at least one of the communicating parties needs to hold 
    current state information and save information about the session history to be able to communicate, as 
    opposed to stateless communication, where the communication consists of independent requests with responses.
</p>

<p>
    An established session is the basic requirement to perform a connection-oriented communication. A session also 
    is the basic step to transmit in connectionless communication modes. However, any unidirectional transmission 
    does not define a session.
</p>

<a href="logout.php">Logout Page</a>