<?php
/*Para facilitar el cálculo a los alumnos de matemática, los alumnos de Programación especificarán un 
algoritmo para calcular Bhaskara.
Bhaskara se aplica cuando debemos resolver una ecuación del tipo 0 = aX2+ bX +c
La formula obtiene dos resultados o raíces:
 x1= [-b + raizCuadrada(b2- 4 a c) ]/ 2a 
 x2= [-b - raizCuadrada(b2-4 a c) ]/ 2a. 
Hay que tener en cuenta que el discriminante de la ecuación ( b2− 4ac ) tiene que ser ≥ 0 para obtener solución dentro de los números .
a. Crear un módulo “calcularDiscriminante” que reciba como parámetro a los coeficientes a, b y c y retorne el cálculo del discriminante.
b. Desde un programa principal solicitar al usuario valores de los coeficientes del término cuadrático, lineal e independiente:
i) Si el discriminante es igual 0, mostrar una mensaje en pantalla que diga que las raíces son dobles y el resultado; 
ii) si el discriminante es mayor a 0, mostrar las dos raíces; 
iii) caso contrario, mostrar un mensaje “no es posible calcular raíces Reales”. 

MODELO EN PSEUDOCÓIGO 

    MODULO calcularDiscriminante (FLOAT a, b, c) RETORNO STRING
        FLOAT resultado, valorDiscriminante, x1, x2

        valorDiscriminante<-(POTENCIA(b, 2)-4*a*c)
        SI(valorDiscriminante>0)ENTONCES 
            x1<-[-b + RAIZ(valorDisciminante)]/(2*a)
            x2<-[-b - RAIZ(valorDisciminante)]/(2*a)
            resultado<-"Las raices son dobles - Resultado de x1= ", x1,"Resultado de x2= ", x2
            RETORNAR resultado            
            SINO
                SI(valorDiscriminante==0)ENTONCES
                    x1<-((-b) + (RAIZ(valorDisciminante))/(2*a)
                    x2<-((-b) - (RAIZ(valorDisciminante))/(2*a)
                    resultado<-"Resultado de x1= ", x1,"Resultado de x2= ", x2
                    RETORNAR resultado
                    SINO
                    resultado<-"no es posible calcular raíces Reales"
                    RETORNAR resultado
                FIN SI
        FIN SI
    FIN MODULO calcularDiscriminante
PROGRAMA PRINCIPAL solucionBaskara
    (*con este programa podremos resolver ecuasiones de segundo grado*)
    FLOAT a, b, c, baskara
    ESCRIBIR("ingrese el primer termino cuadratico: ")
    LEER(a)
    ESCRIBIR("ingrese el segundo termino lineal: ")
    LEER(b)
    ESCRIBIR("Ingrese el tercer termino indepentiente: ")
    LEER(c)

    baskara<-calcularDiscriminante(a, b, c)
    ESCRIBIR(baskara)
FIN PROGRAMA
*/
/*PROGRAMA TRADUCIDO EN PHP */
//RESOLVEREMOS EJERCICIOS DE ECUACIONES DE 2GRADO CON BASKARA   
/**
 *FUNCION calcularDiscriminante
 * @param float $a
 * @param float $b
 * @param float $c
 * @param float $resultado 
 * @param float $valorDiscriminante
 * @param float $x1 
 * @param float $x2
 * @return string
 */
function calcularDiscriminante($a, $b, $c){

    $valorDiscriminante=(pow($b, 2)-(4*$a)*$c);

        if($valorDiscriminante>0){ 
            $x1=((-$b) + (sqrt($valorDiscriminante)))/(2*$a);
            $x2=((-$b) - (sqrt($valorDiscriminante)))/(2*$a);
            $resultado="Resultado de x1= ". $x1."\nResultado de x2= ". $x2;
            return $resultado;
        }else{
                if ($valorDiscriminante==0) {
                    $x1=((-$b) + (sqrt($valorDiscriminante)))/(2*$a);
                    $x2=((-$b) - (sqrt($valorDiscriminante)))/(2*$a);
                    $resultado="Las raices son dobles \nResultado de x1= ". $x1."\nResultado de x2= ". $x2;
                    return $resultado;
                } else {
                    $resultado="no es posible calcular raíces Reales";
                    return $resultado;
            }
        }
}
/*PROGRAMA PRINCIPAL 
OBTENDREMOS EL RESULTADO DE UNA ECUACION DE SEGUNDO GRADO CON BASKARA
*/
//PROGRAMA PRINCIPAL solucionBaskara
//FLOAT a, b, c, baskara
echo "ingrese el primer termino cuadratico: ";
$a=trim(fgets(STDIN));
echo "ingrese el segundo termino lineal: ";
$b=trim(fgets(STDIN));
echo "Ingrese el tercer termino indepentiente: ";
$c=trim(fgets(STDIN));

$baskara=calcularDiscriminante($a, $b, $c);
echo $baskara;
