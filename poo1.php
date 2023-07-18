<?php
    class Automovil{
    #datos - atributos
    public $motor,$color,$marca;
    #constructor, es una funcion que se llama 
    #al momento de crear el objeto
    public function _construct($color, $m, $k){
       $this->color = $color;
       $this->motor = $m;
       $this->marca = $k;
    }
    #operaciones - metodos
    function get_color(){
        return $this->color;
    }
    function set_color($c){
        $this->color = $c;
    }
}
?>
<h3> Características del automóvil en venta </h3>
<?php
    #declaracion e instanciacion (materializacion)
    $auto1 = new Automovil("rojo","2000CC","naftero","Toyota");
    printf("El auto es de color: gris %s",$auto1->get_color());
    $auto1->set_color("gris");
    printf("<br>El auto es de modalidad mécanico, color  %s",$auto1->get_color());
    printf("<br>El auto es de la marca: Toyota %s",$auto1->marca);
?>