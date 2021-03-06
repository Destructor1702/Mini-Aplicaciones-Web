<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Conversor entre Bases Numéricas</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Calculadora conversor de base para cambiar entre decimal, binaria, octal, hexadecimal y muchas otras"/>
	<META name="keywords" content="calculadora, base, bases, octal, hexadecimal, decimal, binario, binaria, convertir, conversor, convertidor, script, programa, javascript, cambiar base, cambio de base, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<SCRIPT src="./JS/scripts.js"></SCRIPT>
<!--Metaetiquetas para Facebook-->
	<META property="og:title" content="Conversor entre Bases Numéricas"/>
	<META property="og:description" content="Calculadora para convertir entre bases" />
	<META property="og:image" content="./images/portada.jpg"/>
<!--Metaetiquetas para Twitter-->
	<META name="twitter:title" content="Conversor entre Bases Numéricas"/>
	<META name="twitter:description" content="Calculadora para convertir entre bases" />
	<META name="twitter:image:src" content="./images/portada.jpg"/>
	<META name="twitter:site" content="@laguialinux"/>
	<META name="twitter:creator" content="@fryntiz"/>
<!--Metaetiquetas para Google+-->
	<LINK href="https://plus.google.com/u/0/b/104205668689475042849/posts" rel="author"/>
	<LINK href="https://plus.google.com/u/0/b/104205668689475042849" rel="publisher"/>
	<META itemprop="name" content="Conversor entre Bases Numéricas"/>
	<META itemprop="description" content="Calculadora para convertir entre bases" />
	<META itemprop="image" content="./images/portada.jpg"/>
</HEAD>

<BODY>
	<H1 id="titulo1">Conversor de Base</H1>
	<H2 id="titulo2">Calculadora para convertir entre bases</H2>
	<IMG src="./images/portada.jpg" alt="Portada Conversor de Bases" style="display:none;"/>
	<P>
		Utiliza la siguiente calculadora para convertir a la base que necesites.
		<BR/>
		Su utilización es tan sencilla como introducir el valor, seleccionar en que base se encuentra el valor introducido y por último seleccionar la base a la cual queremos convertirlo con la calculadora.
		<BR/>
		Una vez establecido los parámetros solo tenemos que pulsar sobre <B>Calcular</B>
		<BR/>
		El tamaño máximo es de <B>17</B> Dígitos/Carácteres.
		<BR/>
		En principio está pensado y comprobado para números enteros.
	</P>
	<DIV class="ejemplo">
		El número <INPUT type="text" name="entrada" id="entrada" size = "17" maxlength = "17"/> escrito en base:
		<SELECT name="selectEntrada" id="selectEntrada">
			<OPTION value="2">2 (BINARIO)</OPTION>
			<OPTION value="3">3</OPTION>
			<OPTION value="4">4</OPTION>
			<OPTION value="5">5</OPTION>
			<OPTION value="6">6</OPTION>
			<OPTION value="7">7</OPTION>
			<OPTION value="8">8 (OCTAL)</OPTION>
			<OPTION value="9">9</OPTION>
			<OPTION value="10" selected>10 (DECIMAL)</OPTION>
			<OPTION value="11">11</OPTION>
			<OPTION value="12">12</OPTION>
			<OPTION value="13">13</OPTION>
			<OPTION value="14">14</OPTION>
			<OPTION value="15">15</OPTION>
			<OPTION value="16">16 (HEXADECIMAL)</OPTION>
		</SELECT>


	<BR/>

	Quieres pasarlo a la siguiente base:
		<SELECT name="selectSalida" id="selectSalida">
			<OPTION value="2" selected>2 (BINARIO)</OPTION>
			<OPTION value="3">3</OPTION>
			<OPTION value="4">4</OPTION>
			<OPTION value="5">5</OPTION>
			<OPTION value="6">6</OPTION>
			<OPTION value="7">7</OPTION>
			<OPTION value="8">8 (OCTAL)</OPTION>
			<OPTION value="9">9</OPTION>
			<OPTION value="10">10 (DECIMAL)</OPTION>
			<OPTION value="11">11</OPTION>
			<OPTION value="12">12</OPTION>
			<OPTION value="13">13</OPTION>
			<OPTION value="14">14</OPTION>
			<OPTION value="15">15</OPTION>
			<OPTION value="16">16 (HEXADECIMAL)</OPTION>
		</SELECT>

		<BR/>

		<INPUT type="button" value="Calcular" onclick="CalcularBase()" id="botoncalcultar"/>
	</DIV>

	<DIV class="ejemplo">
		<P id="tituloResultado">
			Resultado:
		</P>

		<BR/>
		<P id="ResultadoBase">

		</P>
	</DIV>

	<FOOTER>
		<P>
			Proyecto bajo Licencia <A href="https://github.com/fryntiz/Mini-Aplicaciones-Web/blob/master/LICENSE/" title="Licencia de este código" target="_blank"><B style="color:orange;">GPL v.3</B></A>
		</P>

		<P>
			Codigo fuente alojado en <A href="https://github.com/fryntiz/Mini-Aplicaciones-Web/tree/master/Conversor_De_Base/" title="Código Fuente calculadora cambiar de base" target="_blank"><B style="color:orange;">GitHub</B></A>
		</P>

		<BR/>

		<P>
			Para informar de cualquier error o aportar solución (incluso cualquier otro asunto), puedes ponerte en contacto conmigo mediante el correo: <A href="mailto:tecnico@fryntiz.es" title="Correo electrónico fryntiz">tecnico@fryntiz.es</A>
		</P>

		<BR/>

		<P>
			Creado por Raúl Caro Pastorino (<A href="http://www.fryntiz.es" title="Desarrollador WEB Fryntiz en Chipiona" target="_blank"><B style="color:orange;">www.fryntiz.es</B></A>) para el proyecto WEB <B>La Guía Linux</B> (<A href="http://www.laguialinux.es" title="Proyecto La Guía Linux" target="_blank"><B style="color:orange;">www.laguialinux.es</B></A>)
		</P>
	</FOOTER>
</BODY>
</HTML>
