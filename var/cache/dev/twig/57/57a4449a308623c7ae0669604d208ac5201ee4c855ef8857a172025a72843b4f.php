<?php

/* tchat/test.html.twig */
class __TwigTemplate_ddb1a4f38652d6c1e3fc58d828b8485ccd74b72cdd4736872ee2c06bfb011eb5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tchat/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tchat/test.html.twig"));

        // line 1
        echo "<h1>Public chat</h1>
<ul id=\"chat-list\"></ul>
<hr>
<textarea id=\"form-message\" placeholder=\"Your public message here\"></textarea>
<input type=\"button\" id=\"form-submit\" value=\"Send message\"/>

<script>
    // This object will be sent everytime you submit a message in the sendMessage function.
    var clientInformation = {
        username: new Date().getTime().toString()
        // You can add more information in a static object
    };
    
    // START SOCKET CONFIG
    /**
     * Note that you need to change the \"sandbox\" for the URL of your project. 
     * According to the configuration in Sockets/Chat.php , change the port if you need to.
     * @type WebSocket
     */
    var conn = new WebSocket('http://localhost/otaku-Stream/public/tchat');

    conn.onopen = function(e) {
        console.info(\"Connection established succesfully\");
    };

    conn.onmessage = function(e) {
        var data = JSON.parse(e.data);
        Chat.appendMessage(data.username, data.message);
        
        console.log(data);
    };
    
    conn.onerror = function(e){
        alert(\"Error: something went wrong with the socket.\");
        console.error(e);
    };
    // END SOCKET CONFIG
   
    
    /// Some code to add the messages to the list element and the message submit.
    document.getElementById(\"form-submit\").addEventListener(\"click\",function(){
        var msg = document.getElementById(\"form-message\").value;
        
        if(!msg){
            alert(\"Please send something on the chat\");
        }
        
        Chat.sendMessage(msg);
        // Empty text area
        document.getElementById(\"form-message\").value = \"\";
    }, false);
    
    // Mini API to send a message with the socket and append a message in a UL element.
    var Chat = {
        appendMessage: function(username,message){
            var from;
            
            if(username == clientInformation.username){
                from = \"me\";
            }else{
                from = clientInformation.username;
            }
            
            // Append List Item
            var ul = document.getElementById(\"chat-list\");
            var li = document.createElement(\"li\");
            li.appendChild(document.createTextNode(from + \" : \"+ message));
            ul.appendChild(li);
        },
        sendMessage: function(text){
            clientInformation.message = text;
            // Send info as JSON
            conn.send(JSON.stringify(clientInformation));
            // Add my own message to the list
            this.appendMessage(clientInformation.username, clientInformation.message);
        }
    };
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tchat/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Public chat</h1>
<ul id=\"chat-list\"></ul>
<hr>
<textarea id=\"form-message\" placeholder=\"Your public message here\"></textarea>
<input type=\"button\" id=\"form-submit\" value=\"Send message\"/>

<script>
    // This object will be sent everytime you submit a message in the sendMessage function.
    var clientInformation = {
        username: new Date().getTime().toString()
        // You can add more information in a static object
    };
    
    // START SOCKET CONFIG
    /**
     * Note that you need to change the \"sandbox\" for the URL of your project. 
     * According to the configuration in Sockets/Chat.php , change the port if you need to.
     * @type WebSocket
     */
    var conn = new WebSocket('http://localhost/otaku-Stream/public/tchat');

    conn.onopen = function(e) {
        console.info(\"Connection established succesfully\");
    };

    conn.onmessage = function(e) {
        var data = JSON.parse(e.data);
        Chat.appendMessage(data.username, data.message);
        
        console.log(data);
    };
    
    conn.onerror = function(e){
        alert(\"Error: something went wrong with the socket.\");
        console.error(e);
    };
    // END SOCKET CONFIG
   
    
    /// Some code to add the messages to the list element and the message submit.
    document.getElementById(\"form-submit\").addEventListener(\"click\",function(){
        var msg = document.getElementById(\"form-message\").value;
        
        if(!msg){
            alert(\"Please send something on the chat\");
        }
        
        Chat.sendMessage(msg);
        // Empty text area
        document.getElementById(\"form-message\").value = \"\";
    }, false);
    
    // Mini API to send a message with the socket and append a message in a UL element.
    var Chat = {
        appendMessage: function(username,message){
            var from;
            
            if(username == clientInformation.username){
                from = \"me\";
            }else{
                from = clientInformation.username;
            }
            
            // Append List Item
            var ul = document.getElementById(\"chat-list\");
            var li = document.createElement(\"li\");
            li.appendChild(document.createTextNode(from + \" : \"+ message));
            ul.appendChild(li);
        },
        sendMessage: function(text){
            clientInformation.message = text;
            // Send info as JSON
            conn.send(JSON.stringify(clientInformation));
            // Add my own message to the list
            this.appendMessage(clientInformation.username, clientInformation.message);
        }
    };
</script>", "tchat/test.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\tchat\\test.html.twig");
    }
}
