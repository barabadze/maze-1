<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Labyrinthe Generator</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="style">
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print">
    <script type="text/javascript" src="js/maze.js"></script>
    <script type="text/javascript" src="js/solve.js"></script>
	<style type="text/css">
		
      .cell
      {
          float: left;
          border-right: 1px solid transparent;
          border-bottom: 1px solid transparent;
          margin-right: -1px;
          margin-bottom: -1px;
          background: url(images/breadcrumb.png) no-repeat -10px;
      }

      .left { border-left: 1px solid #000000; }
      .right { border-right: 1px solid #000000; }
      .top { border-top: 1px solid #000000; }
      .bottom { border-bottom: 1px solid #000000; }

      .noleft { border-left: 1px solid transparent; }
      .noright { border-right: 1px solid transparent; }
      .notop { border-top: 1px solid transparent; }
      .nobottom { border-bottom: 1px solid transparent; }

      .mrow
      {
          float: left;
      }

      #box
      {
		  margin: 0px auto 30px;
		  overflow: hidden;
		  padding-bottom: 1px;
		  background: url('images/fond.png') #fff;
		  background-repeat:no-repeat;
		  background-position:center; 
          visibility: hidden;
		  
      }

      @media screen
      {
          #details
          {
            margin: 1.5em .75em .5em;
            padding: 1em;
            border: 1px solid #ddd;
            background-color: #fff;
          }

          #mazeform
          {
            padding: .5em;
            margin: auto;
            border: 1px solid #ddd;
            background-color: #f4f4f4;
          }

          input
          {
            padding: 0 20px 0 0;
            margin: 0 5px 0 0;
            vertical-align: middle;
          }
      }

      @media print
      {
          #details { display: none; }
      }

      .cell {height: 10px;} /* this rule must next to last */
      .cell {width:  10px;} /* this rule must be last */
	  #overlay {
     visibility: hidden;
     position: fixed;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     text-align:center;
     z-index: 200;
     background-image:url(maskBG.png);
}

#overlay div {
     width:300px;
     margin: 100px auto;
     background-color: #fff;
     border:1px solid #000;
     padding:15px;
     text-align:center;
}

    </style>
  </head>
  <body>
	<div id="overlay">
		<div>
		<h3>C'est fini la labyrinthe est r&eacute;solu.</h3>
		<a href="#" onclick='overlay()'>Fermer </a>
		<img src="images/resolu.png" alt="resolu" />
		</div>
	</div>
    <div id="masthead">
      <div id="container">
        <div id="logo">
          <a href="#"><img src="images/logo.png" alt="Labyrinthe" height="40"/></a>
        </div>
     
    </div>
    </div>
    <div id="content">
      <div id="details">
        <h4 style="margin-bottom: 1em;">Labyrinthe Generator</h4>
        <form id="mazeform" action="javascript:">
          <table width="100%">
            <tbody>
              <tr>
                <td>La hauteur:</td>
                <td><input style="width: 60px;" value="30" name="y" type="text"></td>                
               
              </tr>
              <tr>
                <td>La largeur:</td>
                <td><input style="width: 60px;" value="30" name="x" type="text"></td>
              </tr>
              <tr>
                <td>largeur des chemin:</td>
                <td><input style="width: 60px;" value="20" name="s" type="text"></td>
                <td>
                  <label>Anfractuosit&eacute;: </label>
                  <input id="n2" value="lo" name="anfr" checked="checked" type="radio"><label for="n2">bas</label>
                  <input id="n1" value="hi" name="anfr" type="radio"><label for="n1">haut</label>
                </td>
              </tr>
            </tbody>
          </table>
          <div>
            <button name="bld" onclick="build()">G&eacute;nerer</button>
            <button name="slv" onclick="solve()" disabled="disabled">R&eacute;sourdre</button>
          </div>
        </form>
      </div>
      <div id="progress" style="display:none;">
        <div id="labels" style="text-align:center;margin:3em auto 0em;font-weight:bold;font-size:16px">
          <span name="label" id="initializing">Initialisation</span> ?
          <span name="label" id="generating">Generation</span> ?
          <span name="label" id="rendering">Pr&eacute;paration</span> ?
          <span name="label" id="display">Affichage</span>
        </div>
        <div id="progbar" style="padding:1px;margin:1em auto;background-color:transparent;border:1px solid black;height:10px;width:100%;">
          <div id="bar" style="background-color:#18416A;height:10px;width:0px;">
          </div>
        </div>
      </div>
    </div>
    <div id="box"></div><script type="text/javascript">
//<![CDATA[
  _uacct = "UA-1155499-1";
  urchinTracker();
  //]]>
  </script>
  
</body>

</html>