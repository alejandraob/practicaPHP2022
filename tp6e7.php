/*PSEUDOCÓIGO
(*Se realizara un modulo que nos permitira realizar el conteo de un numero delimitados por el ingreso de usuario*)
MODULO contarImpar(ENTERO nroInicio, nroFin) RETORNO ENTERO
    ENTERO sumatoriaImpar, inicio, temp
    sumatoriaImpar<-0
    temp<-0
        PARA inicio<-nroInicio HASTA nroFinal paso 1 HACER 
            temp<-inicio MOD 2
                SI(temp=1)ENTONCES
                    sumatoriaImpar<-sumatoriaImpar+inicio
                FIN SI
        FIN PARA 
        RETORNAR sumatoriaImpar
FIN MODULO
(*PROGRA PRINCIPAL DONDE SE INGRESAN LOS PARAMETROS POR USUARIO*)
PROGRAMA PRINCIPAL sumartoriaMinMaxImpar
ENTERO a, b, Resultado
ESCRIBIR("Ingrese un 1ro entero")
LEER(a)
ESCRIBIR("Ingrese un 2do entero")
LEER(b)
SI (a>b)ENTONCES 
    resultado<-contarImpar(b, a)
    ESCRIBIR("nro minimo: ", b," nro max: ", a," La suma es: ", resultado)
SINO 
    resultado<-contarImpar(a, b)
    ESCRIBIR("nro minimo: ", a," nro max: ", b," La suma es: ", resultado)
FIN SI