<?php

declare(strict_types=1);

class SuperHero
{ //esto son las "instrucciones"
  //propiedades y los métodos:

  public function __construct( //promoted properties: nos permiten declarar las propiedades ahorrando codigo.
    private string $name, //la propiedad se hace "invisible" desde fuera
    readonly public array $powers, //de esta forma la propiedad es de solo lectura y no puede ser modificada desde fuera
    public string $planet
  ) {}

  public function attack()
  {
    return "¡$this->name ataca con sus poderes!";
  }

  public function show_all()
  {
    return get_object_vars($this);
  }

  public function description()
  {
    $powers = implode(", ", $this->powers);
    return "$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $powers";
  }

  public static function random()
  {
    $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
    $powers = [
      ["Superfuerza", "Volar", "Rayos Laser"],
      ["Superfuerza", "Super agilidad", "Telarañas"],
      ["Regeneración", "Superfuerza", "Garras de adamantium"],
      ["Superfuerza", "Rayos laser", "Volar"],
      ["Superfuerza", "Super agilidad", "Cambio de tamaño"]
    ];
    $planets = ["Asgard", "Tierra", "HulkWorld", "Krypton"];

    $name = $names[array_rand($names)]; //devuelve la llave, no el valor
    $power = $powers[array_rand($powers)];
    $planet = $planets[array_rand($planets)];

    //echo "El superhéroe elegido es $name, que viene de $planet y tiene los siguientes poderes: " . implode(", ", $power);

    //una utilidad de los metodos estaticos es autogenerar un objeto:
    return new self($name, $power, $planet);
  }
}

$hero = SuperHero::random(); // Se puede llamar a un metodo estático sin haber creado una instancia que lo llame
echo $hero->description();

//para crear el objeto hay que hacer una instancia de esta clase

// $hero = new SuperHero("Batman", ["Dinero", "fuerza", "inteligencia"], "Gotham");
// echo $hero->description();

// $second_hero = new SuperHero("Superman", ["Rayos láser", "superfuera", "supercalzones rojos"], "Krypton");
// echo $second_hero->description();
