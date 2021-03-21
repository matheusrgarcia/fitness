<?php

class MidiaAdapter implements TocadorBasico{

	var $tocadorAdv;
	
	public function MidiaAdapter($tipoMidia){
            if(strtoupper($tipoMidia) == "CD"){
                $this->tocadorAdv = new CdPlayer();
            } else if (strtoupper($tipoMidia) == "VINIL"){
                $this->tocadorAdv = new VinilPlayer();
            }
		
	}
	
	public function tocar($tipoMidia, $nomeArquivo) {
		
            if(strtoupper($tipoMidia) == "CD"){
                $this->tocadorAdv->tocarCd($nomeArquivo);
            } else if (strtoupper($tipoMidia) == "VINIL"){
                $this->tocadorAdv->tocarVinil($nomeArquivo);
            }
		
	}

}
