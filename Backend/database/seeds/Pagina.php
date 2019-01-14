<?php

use Illuminate\Database\Seeder;
use App\Models\Pagina\Noticia;
use App\Models\Pagina\Proyecto;
use App\Models\Pagina\Testimonio;
use App\Models\Pagina\Resultado;

class Pagina extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        $table = new Noticia;
        $table->titulo      = 'Candy Kuilt';
        $table->slug        = 'candy-kuilt';
        $table->descripcion = 'Candy Kuilt nace como idea de negocio de Ana Cecibel Borjas Rosa una mujer emprendedora que tuvo que enfrentar muchos retos para alcanzar el éxito.';
        $table->contenido   = '<p><br></p><p><br></p><blockquote><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: center;"><span style="font-size: 30px; font-family: Georgia, serif;"><strong><span style="color: rgb(124, 112, 107);">Historia</span></strong></span></p></blockquote><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="font-family: Tahoma, Geneva, sans-serif;"><span style="font-size: 18px; color: rgb(40, 50, 78);">Candy Kuilt nace como idea de negocio de <strong>Ana Cecibel Borjas Rosa</strong><strong>&nbsp;</strong>una mujer emprendedora que tuvo que enfrentar muchos retos para alcanzar el &eacute;xito.&nbsp;</span></span><span style="color: rgb(40, 50, 78);"><span style="font-size: 18px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><strong>&nbsp;Cecibel&nbsp;</strong>pas&oacute; de ser madre soltera y jefa de familia a una mujer empresaria, el proceso fue muy dif&iacute;cil, pero le permiti&oacute; descubrir sus habilidades y saber que era una mujer fuerte y arriesgada, aprendi&oacute; que el valor es la mitad de la vida, entendi&oacute; lo que significa caer una y otra vez y volver levantarse.</span></span></span></p><p style="text-align: justify;"><span style="font-family: Tahoma, Geneva, sans-serif;"><span style="font-size: 18px; color: rgb(40, 50, 78);">Actualmente es due&ntilde;a de Candy Kuilt, una empresa legalmente constituida que se dedica a la confecci&oacute;n de prendas de vestir en tela de manta bordados con hilos, listones y m&aacute;s, exportando eventualmente y de manera informal sus productos a varios pa&iacute;ses y generando peque&ntilde;os empleos.</span></span></p><p style="text-align: justify;"><br></p><blockquote><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="font-family: Georgia,serif;"><span style="font-size: 24px; color: rgb(124, 112, 107);">&nbsp;</span><span style="font-size: 30px; color: rgb(124, 112, 107);"><strong>Sobre Candy Kuilt</strong></span></span></p></blockquote><p style="text-align: justify;"><span style="font-family: Tahoma, Geneva, sans-serif;"><span style="font-size: 18px; color: rgb(40, 50, 78);">Es una empresa que hace productos como blusas, vestidos, camisas para hombre, vestidos para ni&ntilde;as con dise&ntilde;os exclusivos, todos sus productos son elaborados a mano por gente trabajadora que pone todo su amor empe&ntilde;o y creatividad en cada detalle.</span></span></p><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><br></p><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="font-family: Verdana, Geneva, sans-serif;"><span style="font-size: 18px; color: rgb(40, 50, 78);">Candy Kuilt ofrece diferentes tipos de dise&ntilde;o para hombres, mujeres, ni&ntilde;os y accesorios para regalos como mu&ntilde;ecas, joyeros y cojines.</span></span></p><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><br></p><blockquote><div><span style="background-color: initial; font-size: 30px; font-family: Georgia, serif;"><strong><span style="color: rgb(124, 112, 107);">Asesor&iacute;as</span></strong></span></div></blockquote><p style="text-align: justify;"><span style="font-size: 18px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><span style="color: rgb(40, 50, 78);">CDMYPE a trav&eacute;s de la asesora de empresarialidad femenina ha apoyado a la empresaria en temas de empoderamiento econ&oacute;mico, autonom&iacute;a econ&oacute;mica y en &aacute;rea empresarial, comercializaci&oacute;n de productos y capacitaciones externas en temas de exportaci&oacute;n, asistencia t&eacute;cnica y vinculaciones entre otras asesor&iacute;as en diferentes &aacute;reas que ayuda a hacer crecer las empresas.</span></span></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><span style="color: rgb(40, 50, 78);"><br></span></span></span></p><p style="text-align: justify;"><span style="font-size: 18px; font-family: Tahoma, Geneva, sans-serif; color: rgb(40, 50, 78);">Tambi&eacute;n se est&aacute; apoyando Tecnolog&iacute;a y en el posicionamiento y reconocimiento en el mercado de la nueva tienda de la empresaria ubicada en la comunidad Milingo de Suchitoto, que se apertura en el mes de mayo.</span></p><p style="text-align: justify;"><span style="font-family: Tahoma, Geneva, sans-serif;"><span style="font-size: 18px; color: rgb(40, 50, 78);">Se ha realizado vinculaci&oacute;n y contacto con otros empresarios para comercializar los productos en la tienda de Candy kuilt.</span></span></p><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><br></p><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><br></p><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><br></p><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><br></p><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><br></p><blockquote><p style="margin: 0cm 0cm 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: center;"><span style="font-size: 24px; font-family: Georgia, serif; color: rgb(251, 160, 38);">&ldquo;Empieza a so&ntilde;ar con algo que deseas realizar en tu vida&rdquo;</span></p></blockquote>';
        $table->categoria   = 3;
        $table->img         = 'BG2.jpg';
        $table->asesor_id   = 2;

        $table->save();

        $table = new Noticia;
        $table->titulo      = 'Sapito Tours';
        $table->slug        = 'sapito-tours';
        $table->descripcion = 'Sapito Tours brinda servicios turísticos y de calidad al turista que lo solicite, con una atención profesional y personalizada dentro del país.';
        $table->contenido   = '<p data-empty="true"><br></p><p><span style="font-size: 24px;"><br></span></p><table style="width: 100%;"><tbody><tr><td style="width: 100%; background-color: rgb(0, 0, 0);"><div style="text-align: center;"><br></div><div style="text-align: center;"><br></div><div style="text-align: center;"><span style="font-family: Georgia, serif; font-size: 60px;"><span style="color: rgb(255, 255, 255);">Espumillas Mama Tere&nbsp;</span></span></div><p style="text-align: center;"><br></p><p style="text-align: center;"><span style="font-family: "Times New Roman", Times, serif, -webkit-standard; font-size: 24px;"><span style="color: rgb(255, 255, 255);">Sabores que alegran tu paladar&nbsp;</span></span></p></td></tr><tr><td style="width: 100%; background-color: rgb(250, 197, 28);"><br></td></tr></tbody></table><p style="text-align: justify;"><br><br></p><table style="width: 96%; margin-right: calc(1%); margin-left: calc(3%);"><tbody><tr><td style="width: 96.9518%; background-color: rgb(239, 239, 239);"><br><div style="text-align: center; margin-left: 60px;"><span style="font-size: 24px; font-family: Tahoma, Geneva, sans-serif;">Ofrece <span style="color: rgb(29, 33, 41);">espumillas de diferentes formas, detalles, colores, sabores, nombres o t&iacute;tulos, ideales para eventos como bodas, cumplea&ntilde;os, Baby Shower.</span></span></div><table style="width: 100%; margin-right: calc(0%);"><tbody><tr><td style="width: 100%; text-align: center;"><br><br><img src="https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/37038468_668666456817714_9188820579736616960_n.jpg?_nc_cat=0&oh=6cb11350d5a76005dc489062f45b6aed&oe=5BFABC36" class="fr-fic fr-dii" style="width: 380px;"><br></td></tr></tbody></table><h2 style="text-align: justify; margin-left: 140px;"><br></h2></td><td style="width: 2.9499%; background-color: rgb(239, 239, 239);"><br></td></tr><tr><td colspan="2" style="width: 98.3284%; background-color: rgb(239, 239, 239);"><table class="fr-dashed-borders" style="background-color: rgb(239, 239, 239); text-align: justify; width: 99%; margin-left: calc(1%); margin-right: calc(0%);"><tbody><tr><td style="width: 2.8747%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 97.0226%; text-align: center;"><table style="width: 100%; margin-left: calc(0%);"><tbody><tr><td style="width: 49.8522%; background-color: rgb(235, 107, 86);"><br></td></tr></tbody></table><br><br><table style="width: 98%; margin-right: calc(2%); margin-left: calc(0%);"><tbody><tr><td style="width: 100.0000%;"><span style="font-family: Impact, Charcoal, sans-serif;"><span style="font-size: 24px;">Do&ntilde;a Cristhians Mej&iacute;a siempre ha sido una mujer emprendedora con muchos deseos de superaci&oacute;n, sin embargo en su negocio ha enfrentado muchos retos para poder s</span></span><span style="font-family: Impact, Charcoal, sans-serif; font-size: 24px;">alir adelante</span><br></td></tr></tbody></table><br></td></tr></tbody></table><table style="background-color: rgb(239, 239, 239); text-align: justify; width: 99%; margin-left: calc(1%); margin-right: calc(0%);"><tbody><tr><td style="width: 2.772%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 2.6695%;"><br></td><td style="width: 53.8265%; margin-left: 80px;"><br><br><span style="color: rgb(0, 0, 0);"><br><span style="font-family: "Times New Roman", Times, serif, -webkit-standard;"><span style="font-size: 24px;">En sus inicios con </span><span style="font-size: 24px;">Espumillas Mama Tere</span><span style="font-size: 24px;">, como todo emprendimiento, carec&iacute;a de recursos financieros para poder invertir en capital de trabajo y equipo para que el negocio fuera realmente viable, es por ello que busc&oacute; apoyo en diferentes entidades, con el objetivo de hacer crecer y consolidar su empresa. En esa b&uacute;squeda, se acerc&oacute; a CDMYPE</span></span></span><span style="font-family: "Times New Roman", Times, serif, -webkit-standard;"><span style="font-size: 24px;"><span style="color: rgb(0, 0, 0);">&nbsp;a solicitar ayuda financiera, ignorando que el Centro adem&aacute;s de asesor&iacute;a financiera pod&iacute;a apoyarle en diferentes &aacute;reas, entre ellas la tecnol&oacute;gica, em</span>presarial, recibir asistencia t&eacute;cnica y acceder a v&iacute;nculos con el mercado.</span></span><br><br><br></td><td style="width: 2.0408%;"><br></td><td style="width: 35.7144%; text-align: right;"><br><img src="https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/32890549_629494614068232_7007970550584705024_n.png?_nc_cat=0&oh=fb34b35a5e3d2aca245b9a2117152479&oe=5BFF761E" class="fr-fic fr-dii" style="width: 295px;"><br></td><td style="width: 3.0611%;"><br></td></tr></tbody></table><table style="width: 100%; margin-right: calc(-1%); margin-left: calc(1%);"><tbody><tr><td style="width: 35.9597%; background-color: rgb(239, 239, 239); text-align: center;"><table style="width: 99%; margin-right: calc(1%);"><tbody><tr><td style="width: 63.2306%; background-color: rgb(250, 197, 28);"><span style="font-family: Tahoma, Geneva, sans-serif; color: rgb(255, 255, 255); font-size: 24px;">COMO LLEG&Oacute; A CDMYPE</span></td></tr></tbody></table></td><td style="width: 63.9387%; text-align: right;"><br></td></tr></tbody></table><table style="width: 95%; margin-right: calc(4%); margin-left: calc(1%);"><tbody><tr><td style="width: 2.8908%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 97.0021%;"><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><br></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">&nbsp; &nbsp; <span style="color: rgb(0, 0, 0);">Un d&iacute;a Do&ntilde;a Cristhians se dirig&iacute;a rumbo a Sensuntepeque a distribuir su producto, hab&iacute;a escuchado hablar de&nbsp;</span></span></span><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">CDMYPE, y decidi&oacute; acercarse a solicitar apoyo para su empresa. En ese momento uno de nuestros asesores, le brindo informaci&oacute;n acerca de las &aacute;reas en las que se le podr&iacute;an apoyar para hacer crecer su empresa.</span></span></span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><span style="color: rgb(0, 0, 0);"><br></span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: "Times New Roman", Times, serif, -webkit-standard; font-size: 24px;">Espumillas Mama Tere&nbsp;al principio dispon&iacute;a de pocos recursos para la producci&oacute;n entre ello. Los activos de la empresa eran una batidora, una mesa y una empleada, sin embargo, su sue&ntilde;o de crecer e ingresar a nuevos mercados le llev&oacute; siempre a buscar alternativas para desarrollar su negocio.</span></span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><br></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><span style="font-family: "Times New Roman", Times, serif, -webkit-standard; font-size: 24px; color: rgb(0, 0, 0);">Actualmente la empresa est&aacute; explorando nuevas zonas del pa&iacute;s para posicionar sus productos, para ello se ha preparado adquiriendo nuevos equipos. La capacidad de producci&oacute;n se ha quintuplicado y de una empleada ha pasado a contar con siete personas permanentes en la producci&oacute;n. Pr&oacute;ximamente inaugurar&aacute; su nueva planta de producci&oacute;n.</span></p><br></td></tr></tbody></table><table style="width: 17%; margin-right: calc(82%); margin-left: calc(1%);"><tbody><tr><td style="width: 100%; background-color: rgb(250, 197, 28);"><span style="font-family: "Times New Roman", Times, serif, -webkit-standard; font-size: 24px;">&nbsp;<span style="color: rgb(255, 255, 255);">&nbsp;ASESOR&Iacute;AS</span></span></td></tr></tbody></table><table style="width: 96%; margin-right: calc(3%); margin-left: calc(1%);"><tbody><tr><td style="width: 2.7542%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 97.1399%; text-align: justify;"><br><span style="color: rgb(0, 0, 0);"><span style="font-size: 24px; font-family: "Times New Roman", Times, serif, -webkit-standard;">CDMYPE</span></span><span style="font-size: 24px; font-family: "Times New Roman", Times, serif, -webkit-standard; color: rgb(0, 0, 0);">&nbsp;a trav&eacute;s de sus asesores, Ingeniero Jes&uacute;s Alvarado (TIC), Lic. Walter Cu&eacute;llar (Empresarial) e Ing. Gustavo Jovel (Financiero) ha apoyado a la empresaria en: </span><br></td></tr></tbody></table><table style="width: 99%; margin-left: calc(1%);"><tbody><tr><td style="width: 2.772%; background-color: rgb(239, 239, 239);"><span style="color: rgb(0, 0, 0);"><br></span></td><td style="width: 22.4847%;"><span style="color: rgb(0, 0, 0);"><br></span></td><td style="width: 74.1433%;"><p><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;"><br></span></span></span></p><ul><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Administraci&oacute;n del cr&eacute;dito.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Gesti&oacute;n del personal.</span></span></span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Adquisici&oacute;n de financiamiento.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Estrategia de marketing digital.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Soluci&oacute;n de conflictos laborales.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Buenas pr&aacute;cticas de manufactura.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Dise&ntilde;o de procesos de producci&oacute;n.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Administraci&oacute;n general del negocio.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Administraci&oacute;n de p&aacute;gina de Facebook.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Dise&ntilde;o de marca y herramientas de para posicionamiento.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-size: 24px; font-family: "Times New Roman", Times, serif, -webkit-standard;">Entre otros.</span></span></li></ul><br></td></tr></tbody></table><table style="width: 96%; margin-right: calc(3%); margin-left: calc(1%);"><tbody><tr><td style="width: 2.9661%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 96.928%; text-align: justify;"><span style="font-size: 24px; font-family: "Times New Roman", Times, serif, -webkit-standard; color: rgb(0, 0, 0);">Actualmente la empresaria recibe asesor&iacute;a en administraci&oacute;n de capital de trabajo, procesos de producci&oacute;n en la nueva planta, implementaci&oacute;n de plan de marketing digital, y seguimiento a administraci&oacute;n de cr&eacute;ditos. Todo ello, con el objetivo de continuar fortaleciendo a la empresa para enfrentar los nuevos retos que presente el crecimiento empresarial.</span><br></td></tr></tbody></table><p style="text-align: justify;"><br></p></td></tr><tr><td colspan="2" style="width: 98.3284%; background-color: rgb(239, 239, 239);"><br></td></tr></tbody></table>';
        $table->categoria   = 3;
        $table->img         = 'sapitos.jpg';
        $table->asesor_id   = 2;

        $table->save();

        $table = new Noticia;
        $table->titulo      = 'Espumillas mama Tere';
        $table->slug        = 'espumillas-mama-tere';
        $table->descripcion = 'Espumillas Mama Tere, sabores que alegran tu paladar.';
        $table->contenido   = '<p data-empty="true"><br></p><p><span style="font-size: 24px;"><br></span></p><table style="width: 100%;"><tbody><tr><td style="width: 100%; background-color: rgb(0, 0, 0);"><div style="text-align: center;"><br></div><div style="text-align: center;"><br></div><div style="text-align: center;"><span style="font-family: Georgia, serif; font-size: 60px;"><span style="color: rgb(255, 255, 255);">Espumillas Mama Tere&nbsp;</span></span></div><p style="text-align: center;"><br></p><p style="text-align: center;"><span style="font-family: "Times New Roman", Times, serif, -webkit-standard; font-size: 24px;"><span style="color: rgb(255, 255, 255);">Sabores que alegran tu paladar&nbsp;</span></span></p></td></tr><tr><td style="width: 100%; background-color: rgb(250, 197, 28);"><br></td></tr></tbody></table><p style="text-align: justify;"><br><br></p><table style="width: 96%; margin-right: calc(1%); margin-left: calc(3%);"><tbody><tr><td style="width: 96.9518%; background-color: rgb(239, 239, 239);"><br><div style="text-align: center; margin-left: 60px;"><span style="font-size: 24px; font-family: Tahoma, Geneva, sans-serif;">Ofrece <span style="color: rgb(29, 33, 41);">espumillas de diferentes formas, detalles, colores, sabores, nombres o t&iacute;tulos, ideales para eventos como bodas, cumplea&ntilde;os, Baby Shower.</span></span></div><table style="width: 100%; margin-right: calc(0%);"><tbody><tr><td style="width: 100%; text-align: center;"><br><br><img src="https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/37038468_668666456817714_9188820579736616960_n.jpg?_nc_cat=0&oh=6cb11350d5a76005dc489062f45b6aed&oe=5BFABC36" class="fr-fic fr-dii" style="width: 380px;"><br></td></tr></tbody></table><h2 style="text-align: justify; margin-left: 140px;"><br></h2></td><td style="width: 2.9499%; background-color: rgb(239, 239, 239);"><br></td></tr><tr><td colspan="2" style="width: 98.3284%; background-color: rgb(239, 239, 239);"><table class="fr-dashed-borders" style="background-color: rgb(239, 239, 239); text-align: justify; width: 99%; margin-left: calc(1%); margin-right: calc(0%);"><tbody><tr><td style="width: 2.8747%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 97.0226%; text-align: center;"><table style="width: 100%; margin-left: calc(0%);"><tbody><tr><td style="width: 49.8522%; background-color: rgb(235, 107, 86);"><br></td></tr></tbody></table><br><br><table style="width: 98%; margin-right: calc(2%); margin-left: calc(0%);"><tbody><tr><td style="width: 100.0000%;"><span style="font-family: Impact, Charcoal, sans-serif;"><span style="font-size: 24px;">Do&ntilde;a Cristhians Mej&iacute;a siempre ha sido una mujer emprendedora con muchos deseos de superaci&oacute;n, sin embargo en su negocio ha enfrentado muchos retos para poder s</span></span><span style="font-family: Impact, Charcoal, sans-serif; font-size: 24px;">alir adelante</span><br></td></tr></tbody></table><br></td></tr></tbody></table><table style="background-color: rgb(239, 239, 239); text-align: justify; width: 99%; margin-left: calc(1%); margin-right: calc(0%);"><tbody><tr><td style="width: 2.772%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 2.6695%;"><br></td><td style="width: 53.8265%; margin-left: 80px;"><br><br><span style="color: rgb(0, 0, 0);"><br><span style="font-family: "Times New Roman", Times, serif, -webkit-standard;"><span style="font-size: 24px;">En sus inicios con </span><span style="font-size: 24px;">Espumillas Mama Tere</span><span style="font-size: 24px;">, como todo emprendimiento, carec&iacute;a de recursos financieros para poder invertir en capital de trabajo y equipo para que el negocio fuera realmente viable, es por ello que busc&oacute; apoyo en diferentes entidades, con el objetivo de hacer crecer y consolidar su empresa. En esa b&uacute;squeda, se acerc&oacute; a CDMYPE</span></span></span><span style="font-family: "Times New Roman", Times, serif, -webkit-standard;"><span style="font-size: 24px;"><span style="color: rgb(0, 0, 0);">&nbsp;a solicitar ayuda financiera, ignorando que el Centro adem&aacute;s de asesor&iacute;a financiera pod&iacute;a apoyarle en diferentes &aacute;reas, entre ellas la tecnol&oacute;gica, em</span>presarial, recibir asistencia t&eacute;cnica y acceder a v&iacute;nculos con el mercado.</span></span><br><br><br></td><td style="width: 2.0408%;"><br></td><td style="width: 35.7144%; text-align: right;"><br><img src="https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/32890549_629494614068232_7007970550584705024_n.png?_nc_cat=0&oh=fb34b35a5e3d2aca245b9a2117152479&oe=5BFF761E" class="fr-fic fr-dii" style="width: 295px;"><br></td><td style="width: 3.0611%;"><br></td></tr></tbody></table><table style="width: 100%; margin-right: calc(-1%); margin-left: calc(1%);"><tbody><tr><td style="width: 35.9597%; background-color: rgb(239, 239, 239); text-align: center;"><table style="width: 99%; margin-right: calc(1%);"><tbody><tr><td style="width: 63.2306%; background-color: rgb(250, 197, 28);"><span style="font-family: Tahoma, Geneva, sans-serif; color: rgb(255, 255, 255); font-size: 24px;">COMO LLEG&Oacute; A CDMYPE</span></td></tr></tbody></table></td><td style="width: 63.9387%; text-align: right;"><br></td></tr></tbody></table><table style="width: 95%; margin-right: calc(4%); margin-left: calc(1%);"><tbody><tr><td style="width: 2.8908%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 97.0021%;"><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><br></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">&nbsp; &nbsp; <span style="color: rgb(0, 0, 0);">Un d&iacute;a Do&ntilde;a Cristhians se dirig&iacute;a rumbo a Sensuntepeque a distribuir su producto, hab&iacute;a escuchado hablar de&nbsp;</span></span></span><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">CDMYPE, y decidi&oacute; acercarse a solicitar apoyo para su empresa. En ese momento uno de nuestros asesores, le brindo informaci&oacute;n acerca de las &aacute;reas en las que se le podr&iacute;an apoyar para hacer crecer su empresa.</span></span></span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><span style="color: rgb(0, 0, 0);"><br></span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: "Times New Roman", Times, serif, -webkit-standard; font-size: 24px;">Espumillas Mama Tere&nbsp;al principio dispon&iacute;a de pocos recursos para la producci&oacute;n entre ello. Los activos de la empresa eran una batidora, una mesa y una empleada, sin embargo, su sue&ntilde;o de crecer e ingresar a nuevos mercados le llev&oacute; siempre a buscar alternativas para desarrollar su negocio.</span></span></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><br></p><p style="margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;"><span style="font-family: "Times New Roman", Times, serif, -webkit-standard; font-size: 24px; color: rgb(0, 0, 0);">Actualmente la empresa est&aacute; explorando nuevas zonas del pa&iacute;s para posicionar sus productos, para ello se ha preparado adquiriendo nuevos equipos. La capacidad de producci&oacute;n se ha quintuplicado y de una empleada ha pasado a contar con siete personas permanentes en la producci&oacute;n. Pr&oacute;ximamente inaugurar&aacute; su nueva planta de producci&oacute;n.</span></p><br></td></tr></tbody></table><table style="width: 17%; margin-right: calc(82%); margin-left: calc(1%);"><tbody><tr><td style="width: 100%; background-color: rgb(250, 197, 28);"><span style="font-family: "Times New Roman", Times, serif, -webkit-standard; font-size: 24px;">&nbsp;<span style="color: rgb(255, 255, 255);">&nbsp;ASESOR&Iacute;AS</span></span></td></tr></tbody></table><table style="width: 96%; margin-right: calc(3%); margin-left: calc(1%);"><tbody><tr><td style="width: 2.7542%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 97.1399%; text-align: justify;"><br><span style="color: rgb(0, 0, 0);"><span style="font-size: 24px; font-family: "Times New Roman", Times, serif, -webkit-standard;">CDMYPE</span></span><span style="font-size: 24px; font-family: "Times New Roman", Times, serif, -webkit-standard; color: rgb(0, 0, 0);">&nbsp;a trav&eacute;s de sus asesores, Ingeniero Jes&uacute;s Alvarado (TIC), Lic. Walter Cu&eacute;llar (Empresarial) e Ing. Gustavo Jovel (Financiero) ha apoyado a la empresaria en: </span><br></td></tr></tbody></table><table style="width: 99%; margin-left: calc(1%);"><tbody><tr><td style="width: 2.772%; background-color: rgb(239, 239, 239);"><span style="color: rgb(0, 0, 0);"><br></span></td><td style="width: 22.4847%;"><span style="color: rgb(0, 0, 0);"><br></span></td><td style="width: 74.1433%;"><p><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;"><br></span></span></span></p><ul><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Administraci&oacute;n del cr&eacute;dito.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Gesti&oacute;n del personal.</span></span></span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Adquisici&oacute;n de financiamiento.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Estrategia de marketing digital.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Soluci&oacute;n de conflictos laborales.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Buenas pr&aacute;cticas de manufactura.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Dise&ntilde;o de procesos de producci&oacute;n.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Administraci&oacute;n general del negocio.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Administraci&oacute;n de p&aacute;gina de Facebook.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Times New Roman,Times,serif,-webkit-standard;"><span style="font-size: 24px;">Dise&ntilde;o de marca y herramientas de para posicionamiento.</span></span></span></li><li style="margin-top: 0cm; margin-right: 0cm; margin-bottom: 8pt; font-size: 15px; font-family: Calibri, sans-serif; text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-size: 24px; font-family: "Times New Roman", Times, serif, -webkit-standard;">Entre otros.</span></span></li></ul><br></td></tr></tbody></table><table style="width: 96%; margin-right: calc(3%); margin-left: calc(1%);"><tbody><tr><td style="width: 2.9661%; background-color: rgb(239, 239, 239);"><br></td><td style="width: 96.928%; text-align: justify;"><span style="font-size: 24px; font-family: "Times New Roman", Times, serif, -webkit-standard; color: rgb(0, 0, 0);">Actualmente la empresaria recibe asesor&iacute;a en administraci&oacute;n de capital de trabajo, procesos de producci&oacute;n en la nueva planta, implementaci&oacute;n de plan de marketing digital, y seguimiento a administraci&oacute;n de cr&eacute;ditos. Todo ello, con el objetivo de continuar fortaleciendo a la empresa para enfrentar los nuevos retos que presente el crecimiento empresarial.</span><br></td></tr></tbody></table><p style="text-align: justify;"><br></p></td></tr><tr><td colspan="2" style="width: 98.3284%; background-color: rgb(239, 239, 239);"><br></td></tr></tbody></table>';
        $table->categoria   = 3;
        $table->img         = 'espumillas.jpg';
        $table->asesor_id   = 2;

        $table->save();


        for($i = 1; $i <= 50 ; $i++)
        {
            $table = new Proyecto;
            $table->titulo          = $faker->realText(30,2);
            $table->descripcion     = $faker->text;
            $table->finalizacion    = $faker->date;
            $table->tipo            = $faker->numberBetween(1,3);
            $table->especialidad_id = $faker->numberBetween(1,5);
            $table->estado          = $faker->numberBetween(1,3);
            $table->duracion        = '5 Semanas';
            $table->asesor_id       = $faker->numberBetween(1,3);

            $table->save();

        }

            // $table = new Testimonio;
            // $table->cliente_id      = 15;
            // $table->descripcion     = $faker->text;
            // $table->asesor_id       = 2;

            // $table->save();

            // $table = new Testimonio;
            // $table->cliente_id      = 240;
            // $table->descripcion     = $faker->text;
            // $table->asesor_id       = 2;

            // $table->save();

            $table = new Resultado;
            $table->nombre      = 'Empresas';
            $table->total       = $faker->numberBetween(1,799);
            $table->icon        = 'building';
            $table->save();
            $table = new Resultado;
            $table->nombre      = 'Empleos';
            $table->total       = $faker->numberBetween(1,799);
            $table->icon        = 'users';
            $table->save();
            $table = new Resultado;
            $table->nombre      = 'Asesorías';
            $table->total       = $faker->numberBetween(1,799);
            $table->icon        = 'rocket';
            $table->save();
            $table = new Resultado;
            $table->nombre      = 'Capacitaciones';
            $table->total       = $faker->numberBetween(1,799);
            $table->icon        = 'users';
            $table->save();
            $table = new Resultado;
            $table->nombre      = 'Creditos';
            $table->total       = $faker->numberBetween(1,799);
            $table->icon        = 'money';
            $table->save();
            $table = new Resultado;
            $table->nombre      = 'Ventas';
            $table->total       = $faker->numberBetween(1,799);
            $table->icon        = 'money';
            $table->save();


    }
}
