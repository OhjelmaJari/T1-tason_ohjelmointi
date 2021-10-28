function ArvoLottoRivi() {
  /* Luodaan ja "nollataan" virhe- ja Arvontatekstit */
  var Virheteksti="&nbsp;";
  var Arvontateksti="&nbsp;";
  var SuurinNumero=40;
  /* asetetaan tekstit paikoilleen */
  document.getElementById("virhetekstipaikka").innerHTML = Virheteksti;
  document.getElementById("rivitekstipaikka").innerHTML = Arvontateksti;
  var NumeroidenMaara = document.getElementById("NumeroidenMaara").value;
  if (NumeroidenMaara > 18 || NumeroidenMaara < 7 || NumeroidenMaara == 17) {
    Virheteksti="Numeroiden määrän on oltava välillä 7-18, ei kuitenkaan 17.";
    document.getElementById("virhetekstipaikka").innerHTML = Virheteksti;
  }
  else {
    if(NumeroidenMaara<=8) {Arvontateksti = "7 rastin rivi. Onnea!";}
    if(NumeroidenMaara==8) {Arvontateksti = "8 rastin järjestelmä (8 riviä). Onnea!";}
    if(NumeroidenMaara==9) {Arvontateksti = "9 rastin järjestelmä (36 riviä). Onnea!";}
    if(NumeroidenMaara==10) {Arvontateksti = "10 rastin järjestelmä (120 riviä). Onnea!";}
    if(NumeroidenMaara==11) {Arvontateksti = "11 rastin järjestelmä (330 riviä). Onnea!";}
    if(NumeroidenMaara==12) {Arvontateksti = "12 rastin harava (60 riviä). Onnea!";}
    if(NumeroidenMaara==13) {Arvontateksti = "13 rastin harava (112 riviä). Onnea!";}
    if(NumeroidenMaara==14) {Arvontateksti = "14 rastin harava (196 riviä). Onnea!";}
    if(NumeroidenMaara==15) {Arvontateksti = "15 rastin harava (237 riviä). Onnea!";}
    if(NumeroidenMaara==16) {Arvontateksti = "16 rastin harava (439 riviä). Onnea!";}
    if(NumeroidenMaara==18) {Arvontateksti = "18 rastin harava (600 riviä). Onnea!";}
    document.getElementById("rivitekstipaikka").innerHTML = Arvontateksti;
    /* Luodaan ja "nollataan" muuttuja Numerot */
    var Numerot = [];
    /* Luodaan ja "nollataan" muuttujat a ja OK */
    var OK = 0;
    var a = 0;
    /* Luodaan "pallerotaulukko" */
    const Pallerot = [];
    /* Luodaan taulukkoon lisättäville merkkijonoille muuttuja */
    var talteen = "";
    for(Indeksi = 0; Indeksi < NumeroidenMaara; Indeksi++) {
        a = Math.ceil(Math.random()*SuurinNumero);
        if(Numerot.indexOf(a) == -1) Numerot.push(a);
        else Indeksi--;
    }
    /* Järjestetään taulukko */
    Numerot.sort((a, b) => (a - b));
    /* Luodaan Pallerotaulukko tulostusta varten */
    for(a = 0; a < NumeroidenMaara; a++) {
      talteen = '<img src="Kuvat/Pallot/' + Numerot[a] + '.png" alt="Pallo numero ' + Numerot[a] + '" width="10%">';
      Pallerot.push(talteen);
    }
    // alert(Pallerot.toString());
    /* Tulostetaan taulukko */
    document.getElementById("rivi").innerHTML = Pallerot.join("  ");
    document.getElementById("rivi2").innerHTML = '<input class="lahjoitus" type="button" value="Tarkasta aiemmat" onclick="TarkastaRivi(Pallerot)"/><br>';
    document.getElementById("rivi3").innerHTML = '<input class="lahjoitus" type="button" value="Tallenna rivi" onclick="TallennaRivi(Pallerot)"/><br>';
  }
}

function openTab() {
  window.open('https://www.paypal.com/paypalme/bicycleregister');
}

function onkoEnter(e){
 var key=e.keyCode || e.which;
  if (key===13){
     ArvoLottoRivi();
  }
}
