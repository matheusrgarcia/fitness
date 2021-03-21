<?php

class AudioPlayer implements TocadorBasico{

	public function tocar($tipoMidia, $nomeArquivo) {
		
            if($tipoMidia == "cd"){
                $this->midia = new MidiaAdapter($tipoMidia);
                $this->midia->tocar($tipoMidia, $nomeArquivo);
            } else if ($tipoMidia == "vinil"){
                $this->midia = new MidiaAdapter($tipoMidia);
                $this->midia->tocar($tipoMidia, $nomeArquivo);
            }
		
	}

}
