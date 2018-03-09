<?php
  /**
   * Decodificador de la api de clashRoyale
   * se le pasa por argumento el endpoint
   * en el atributo data guardamos el resultado
   */
  class Decoder
  {
    private $endPoint;
    private $token;
    private $opts;
    private $context;
    private $reqest;
    private $data;

    public function __construct($anEndPoint)
    {
      $this->endPoint = $anEndPoint;
      $this->token ="7cf67fdd1a6c4a5ca06676ba421529f4e90e729fd80046d3a7d54a49fdd73383";
      $this->opts = ["http" => ["header" => "auth:" . $this->token]];
      $this->context = stream_context_create($this->opts);
      $this->reqest = file_get_contents("http://api.cr-api.com/{$this->endPoint}",true, $this->context);
      $this->data = json_decode($this->reqest, true);
    }

    public function getdata(){
      return $this->data;
    }
  }

 ?>
