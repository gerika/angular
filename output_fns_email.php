<?php
   function do_html_header($title)
   {
    ?>
      <html>
      <head>
        <title>$title</title>
        <style >
           body(font_family:Arial,Helvetica,sans-serif;font-size:13px)
             li,td(font-family:Arial,Helvetica,sans-serif;font-size:13px)
             hr(color:#3333cc;width=300;text-align=left)
             a(color:#000000)
        </style>
      </head>
      <body>
        <h1>&nsbp;CompartElinks</h1>
        <hr>
    <?
   }
   function do_html_footer()
   {
    ?>
     </body>
      </html>
    <?
   }
   function do_html_heading($heading)
   {
    ?>
      <h2><?=$heading?></h2>
     <?
   }
   
   function do_html_URL($url,$name)
  {
    ?>
    <br><a href="<?=$url?>"><?=$name?></a></br>
    <?
  }
  function display_site_info()
  {
    ?>
     <ul>
       <li>Almacena tus marcadores online con nosotros</li>
       <li>Conoce los que usan otros usuarios</li>
       <li>Comprate tus enlaces favoritos con otros</li>
     </ul>
    <?
  }
   function display_login_form()
   {
     ?>
     <a href="regsiter_form.php">¿No eres miembro aun?</a>
     <form method="post" action="member_email.php">
       <table bgcolor=yellow>
         <tr>
         	<td>Miembros identificarse aqui:</td>
         </tr>
         <tr>
         	<td>Nombre Usuario:</td>
         	<td><input type="text" name="username"></td>
         </tr>
         <tr>
         	<td>Contraseña:</td>
         	<td><input type="password" name="passwd"></td>
         </tr>
         <tr>
         	<td align =center><input type="submit" value="Log in"></td>
         </tr>
         <tr>
         	<td><a href="forgot_form_email.php"></a>Olvidaste tu contraseña</td>
         </tr>
       </table>
     </form>
     <?
   }
    function display_registration_form()
    {
     ?>
       <form method="post" action="register_new_email.php">
      <table bgcolor=green>
        <tr>
          <td>Direccion email:</td>
          <td><input type="text" name="email" size=30 maxlength=100></td>
        </tr>
        <tr>
          <td>Nombre de ususario preferido<br>(max 16 caract):</td>
          <td><input type="text" name="username" size=16 maxlength=16></td>
        </tr>
        <tr>
          <td>Confirmar Contraseña:</td>
          <td><input type="password" name="passwd2" size=16 maxlength=16></td>
        </tr>
        <tr>
          <td><input type="submit" value="Register"></td>
        </tr>
      </table>
       </form>
     <? 
    }
    function display_forgot_form()
    {
      ?>
       <br>
       <form action="forgot_passwd_email.php" method="post">
        <table width=250 cellpadding=2 cellspacing=0 bgcolor=#cccccc>
         <tr>
          <td>Escribe tu nombre de Usuario</td>
          <td><input type="text" name="username" size=16 maxlength=16></td>
         </tr>
         <tr>
          <td align=center><input type="submit" vamue="Change password"></td>
         </tr>
        </table>
        <br>
      <?
    }
    function
    {
      ?>
       
       if($color==)
       {

       }else
       {

       }
      <?
    }

   ?>
</body>
</html>
