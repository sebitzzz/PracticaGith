<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica GIT - Resumen de Java</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; max-width: 850px; margin: 20px auto; padding: 0 15px; color: #333; }
        h1, h2, h3 { color: #2c3e50; }
        section { background: #f9f9f9; border-left: 4px solid #3498db; padding: 15px; margin-bottom: 20px; border-radius: 4px; }
        pre { background: #272822; color: #f8f8f2; padding: 12px; border-radius: 5px; overflow-x: auto; }
    </style>
</head>
<body>

    <h1>Práctica GIT: Resumen de Java</h1>
    <p><strong>Integrante:</strong> [Escribe aquí tu Nombre y Apellido] | <strong>Colaborador Docente:</strong> BQuirogaCPP</p>

    <h2>Resumen Teórico de Java</h2>

    <section>
        <h3>4.1.1. Sintaxis de Java</h3>
        <ul>
            <li>Es un lenguaje compilado y <strong>fuertemente tipado</strong> (se debe declarar el tipo de dato: <code>int</code>, <code>double</code>, <code>String</code>, <code>boolean</code>).</li>
            <li>Es <strong>Case-Sensitive</strong> (distingue entre mayúsculas y minúsculas).</li>
            <li>Toda sentencia termina con punto y coma (<code>;</code>) y los bloques se delimitan con llaves <code>{ }</code>.</li>
            <li>Todo programa requiere una clase principal y el método de entrada <code>main</code>.</li>
        </ul>
<pre><code>public class Ejemplo {
    public static void main(String[] args) {
        int edad = 20;
        String nombre = "Ana";
        System.out.println("Hola " + nombre + ", tienes " + edad);
    }
}</code></pre>
    </section>

    <section>
        <h3>4.1.2. Estructuras Repetitivas (Bucles)</h3>
        <p>Permiten ejecutar un bloque de código varias veces mientras se cumpla una condición lógica:</p>
        <ul>
            <li><strong>FOR:</strong> Se usa cuando se conoce el número exacto de iteraciones.</li>
            <li><strong>WHILE:</strong> Evalúa la condición antes de entrar (se ejecuta 0 o más veces).</li>
            <li><strong>DO-WHILE:</strong> Ejecuta el bloque al menos una vez y evalúa la condición al final.</li>
        </ul>
<pre><code>for (int i = 1; i &lt;= 5; i++) {
    System.out.println("Vuelta: " + i);
}

int contador = 0;
while (contador &lt; 3) {
    contador++;
}

int num = 0;
do {
    num++;
} while (num &lt; 3);</code></pre>
    </section>

    <section>
        <h3>4.1.3. POO (Atributos y Métodos)</h3>
        <p>Paradigma basado en <strong>Clases</strong> (plantillas) y <strong>Objetos</strong> (instancias):</p>
        <ul>
            <li><strong>Atributos:</strong> Variables dentro de la clase que representan características o estado (protegidos con <code>private</code>).</li>
            <li><strong>Métodos:</strong> Funciones dentro de la clase que definen acciones o comportamientos.</li>
        </ul>
<pre><code>public class Vehiculo {
    private String marca;
    private int velocidad;

    public Vehiculo(String marca) {
        this.marca = marca;
        this.velocidad = 0;
    }

    public void acelerar(int incremento) {
        this.velocidad += incremento;
    }
}</code></pre>
    </section>

    <section>
        <h3>4.1.4. Herencia</h3>
        <p>Permite que una clase hija (subclase) adquiera atributos y métodos de una clase padre (superclase) mediante la palabra clave <code>extends</code> y <code>super()</code>.</p>
<pre><code>public class Auto extends Vehiculo {
    private int puertas;

    public Auto(String marca, int puertas) {
        super(marca);
        this.puertas = puertas;
    }
}</code></pre>
    </section>

</body>
</html>