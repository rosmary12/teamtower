<?php
	function calcularsuelo(){
		var PI = LL- PL;
			ECHO PI;
		if (F200> 35){
			if(LL< 40){
				if(PI< 11){
					TipoSuelo = "A-4, Suelo Limoso, Subrasante Regular a Pobre";
				}else{				
					TipoSuelo = "A-6, Suelo Arcilloso, Subrasante Regular a Pobre";
				}
			}else{
				if(PI< 11){
					TipoSuelo = "A-5, Suelo Limoso, Subrasante Regular a Pobre";
				}else{		
					if(PI< LL-30){
						TipoSuelo = "A-7-5, Suelo Arcilloso, Subrasante Regular a Pobre";
					}else{
						TipoSuelo = "A-7-6, Suelo Arcilloso, Subrasante Regular a Pobre";
					}	
				}
			}
		}else{
			if(LL<40){
				if(PI=0){
					if (F200<11){
						if (F40>50){
							TipoSuelo = "A-3, Arena Fina, Subrasante Excelente a Buena";
						}
					}
				}else{
					if(PI<7){
						if (F200<26){
							if (F40<51){
								TipoSuelo = "A-1-b, Fragmentos de Roca, grava y arena, Subrasante Excelente a Buena";
							}
						}					
						if (F200<16){
							if (F40<31){
								if (F10<51){
									TipoSuelo = "A-1-a, Fragmentos de Roca, grava y arena, Subrasante Excelente a Buena";
								}
							}
						}
					}else{
						if(PI< 11){
							TipoSuelo = "A-2-4, Grava y Arena Limosa o arcillosa, Subrasante Excelente a Buena";
						}else{				
							TipoSuelo = "A-2-6, Grava y Arena Limosa o arcillosa, Subrasante Excelente a Buena";
						}
					}
				}
			}else{
				if(PI<11){
					TipoSuelo = "A-2-5, Grava y Arena Limosa o arcillosa, Subrasante Excelente a Buena";
				}else{		
					TipoSuelo = "A-2-7, Grava y Arena Limosa o arcillosa, Subrasante Excelente a Buena";	
				}
			}
		}
			echo "TipoSuelo";
		if(TipoSuelo= "A-2-6"  || TipoSuelo= "A-2-7"){
			GI = 0,01*(F200-15)*(PI-10);
		}else{
				GI= (F200-35)*(0,2 + 0,005*(LL-40))+0,01*(F200-15)*(PI-10);
		}		
	}
	

	
var EM= 2000;
var CBRb=20;
var CBRsb=10;
var RCSc7=300;
var CBRs=CBRsat;
var CBRh=CBRhum;
var CBRsc=CBRsec;
var VRs =VRsat;
var VRh =VRhum;
var VRsc =VRsec;
var TTCs = TTCSat;
var TTCh = TTChum;
var TTCsc= TTCsec;
var SOPs = SOPsat;
var SOPh = SOPhum;
var SOPsc = SOPsec;
var VRC =10;
var VRW =10;
var CBRK =20;
var TTC = 5;
var Coefa1=(-1,8919848641E-11)*EM*EM*EM + (5,7391640867E-08)*EM*EM + (9,0879342965E-05)*EM + 1,7262590299E-01;
var Coefa2=0,00000020456802383*CBRb*CBRb*CBRb - 0,000050047169811*CBRb*CBRb + 0,0042959036743*CBRb + 0,0064448857994;
var Coefa3= -0,00000020289855072*CBRsb*CBRsb*CBRsb + 0,000010062111801*CBRsb*CBRsb + 0,0012345755694*CBRsb + 0,066832298137;
var Coefa4= 0,00015766666667*RCSc7 + 0,093288888889;
var MRsc=10000*(-0,0000000034932659933*RCSc7*RCSc7*RCSc7 + 0,0000085281385281*RCSc7*RCSc7 - 0,00069883357383*RCSc7+ 5,1043650794);

if (Radio .Value= CBRHK);
		MRs = 1500 CBRs;
		MRh = 1500 CBRh;
		MRsc = 1500 CBRsc;

MR = 3000*POTENCIA(CBRK;0,65);
MR = 4326*LN(CBRK)+ 241;
MR = 1000 +555*VRIA;
MR = 1019,05649*EXP(0,36935*SOP);
MR = 2184,56125*EXP(0,03466*VRC);
MR = 2608,8492*EXP(0,0329*VRW);
MR = 1923,6422*POTENCIA(CBRK;0,68839);
MR = 2476,6359*TTC*TTC - 28924,71605*TTC + 87456,13361;


var el = 'La señora';
document.write(ella + " tiene " + age + " años\n");
document.write(el + " tiene " + age + " años");

?>