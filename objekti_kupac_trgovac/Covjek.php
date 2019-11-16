<?php
spl_autoload_register(function ($class) {
    include './' . $class . '.php';
});
/**
 * Klasa Covjek, nasljedjuje ju klasa Kupac
 * @author John Doe <john.doe@example.com>
 * @access public
 * @property String $ime Ime covjeka
 */
class Covjek extends AZivobice {
        /**
     * <pre><code>
     * <?php
     * $kupac= new Covjek();
     * $kupac->ime="Pero";
     * ?>
     * </code></pre>
     * @var String Ime čovjeka
     */
    public $posao;
    public $ime;  // Svojstvo, property
    function __construct($novo_ime='Jane Doe') {
        echo '<br>--- Kreiran je novi covjek! ---<br>';
        $this->set_ime($novo_ime);
    }
    function __destruct() {
        echo '<br>--- Covjek je unisten! ---<br>';
    }
    function set_posao($vrsta_posla) {  // Metoda, Method
        $this->posao=$vrsta_posla;
    }
        function get_posao() {  // Metoda, Method
        $this->posao->ispis();
    }

    /**
     * Promjena imena pomoću metode
     * Ovakvo postavljanje svojstava zovemo SETTER metoda
     * @param String $novo_ime
     */
    function set_ime($novo_ime) {  // Metoda, Method
        $this->ime=ucfirst($novo_ime);
    }
     /**
     * Dohvaćamo ime pomoću metode --> GETTER
     * @return String Ime kupca
     */
    function get_ime(): string {  // G"etter
        //return $this->ime.", ".$this->ime." Bond" ;
        return sprintf("%s, %s Bond",$this->ime,$this->ime) ;
    }
    function glasaj_se() {
        //parent::glasaj_se();
        echo "<br><b>lalalala</b>";
    }
}
