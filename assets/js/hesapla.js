//Hesaplama
var $jq = jQuery.noConflict();


function sureHesaplauzman(tip) 
{
    var x = document.getElementById("calisan_sayisi").value;
    if (x.length<1) 
    {
        alert("Lütfen çalışan sayısını boş bırakmayın.");
        return false;
    }
    else if (!x.match(/^[0-9]+$/)) 
    {
        alert("Lütfen çalışan sayısı alanına geçerli bir rakam girin.");
        return false;
    }
    $jq("#sureUA").html(hesaplaDereceyeGore(x, "UA", tip));
    $jq("#sureUB").html(hesaplaDereceyeGore(x, "UB", tip));
    $jq("#sureUC").html(hesaplaDereceyeGore(x, "UC", tip));
}

function sureHesaplahekim(tip) 
{
    var x = document.getElementById("calisan_sayisi").value;
    $jq("#sureHA").html(hesaplaDereceyeGore(x, "HA", tip));
    $jq("#sureHB").html(hesaplaDereceyeGore(x, "HB", tip));
    $jq("#sureHC").html(hesaplaDereceyeGore(x, "HC", tip));
}

function sureHesaplasaglik(tip) 
{
    var x = document.getElementById("calisan_sayisi").value;
    $jq("#sureSA").html(hesaplaDereceyeGore(x, "SA", tip));
    $jq("#sureSB").html(hesaplaDereceyeGore(x, "SB", tip));
    $jq("#sureSC").html(hesaplaDereceyeGore(x, "SC", tip));
}
function sureHesaplailkyardim(tip) 
{
    var x = document.getElementById("calisan_sayisi").value;
    $jq("#sureIA").html(hesaplaDereceyeGore(x, "IA", tip));
    $jq("#sureIB").html(hesaplaDereceyeGore(x, "IB", tip));
    $jq("#sureIC").html(hesaplaDereceyeGore(x, "IC", tip));
}
function sureHesaplayangin(tip) 
{
    var x = document.getElementById("calisan_sayisi").value;
    $jq("#sureYA").html(hesaplaDereceyeGore(x, "YA", tip));
    $jq("#sureYB").html(hesaplaDereceyeGore(x, "YB", tip));
    $jq("#sureYC").html(hesaplaDereceyeGore(x, "YC", tip));
}


function hesaplaDereceyeGore(x, derece, tip) 
{
    if(tip == "uzman") 
    {
        if(x < 50 && derece == "UC") {
            return "01 Ocak 2023'e kadar muaf"
        } 
        else {
            if(derece == "UA") {
                kisi_basi = 40;
                tam_zamanli = x / 250;
                artan = x % 250;
            }
            else if(derece == "UB") {
                kisi_basi = 20;
                tam_zamanli = x / 500;
                artan = x % 500;
            }else if(derece == "UC") {
                kisi_basi = 10;
                tam_zamanli = x / 1000;
                artan = x % 1000;
            }
            tam_zamanli = Math.floor(tam_zamanli);

            returnText = "";

            tam_var = false;
            if(tam_zamanli > 0) {
                returnText = tam_zamanli + " Tam Zamanlı";
                tam_var = true;
            }
            if(artan > 0) {
                if(tam_var) {
                    returnText += " + ";
                }
                returnText += Math.ceil((kisi_basi*artan)/60) + " Saat";
            }
        
            return returnText;
        }
    } 
        else if (tip == "hekim") 
        {
            if(derece == "HA"){
                kisi_basi = 15;
                tam_zamanli = x / 750;
                artan = x % 750;
            }
            else if(derece == "HB"){
                kisi_basi = 10;
                tam_zamanli = x / 1000;
                artan = x % 1000;
            }
            else if(derece == "HC"){
                    if(x < 50)
                 return "1 Ocak 2023'e kadar muaf"
                
                
                 else {
                kisi_basi = 5;
                tam_zamanli = x / 2000;
                artan = x % 2000;
            }
        }
        
            tam_zamanli = Math.floor(tam_zamanli);
        
            returnText = "";
        
            tam_var = false;
            if(tam_zamanli > 0) 
            {
                returnText = tam_zamanli + " Tam Zamanlı";
                tam_var = true;
            }
        
        
            if(artan > 0) {
            if(tam_var) {
                returnText += " + ";
            }
            returnText += Math.ceil((kisi_basi*artan)/60) + " Saat";
            }
        
            return returnText;
        }
        else if (tip == "saglikpersoneli") 
        {
            if(derece == "SA") 
            {
                if(x >= 10 && x <= 49) 
                {
                    return Math.ceil((10*x)/60) + " Saat";
                }
                else if(x >= 50 && x <= 249) 
                {
                    return Math.ceil((15*x)/60) + " Saat";
                }
                else if(x >= 250) 
                {
                    return Math.ceil((20*x)/60) + " Saat";
                }
            }
            else if(derece == "SB" || derece == "SC") 
            {
                return "Zorunluluk Yok";
            }
        }
                else if(tip == "ilkyardimci") 
                {
                    if(derece == "IA") 
                    {
                        return Math.ceil((x/10)) + " KİŞİ";
                    }
                        else if(derece == "IB") 
                        {
                            return Math.ceil((x/15)) + " KİŞİ";                
                        }
                        else if(derece == "IC") 
                        {
                            return Math.ceil((x/20)) + " KİŞİ";
                        }    
                }
                            else if(tip == "yanginci") 
                            {
                                if(derece == "YA") 
                                {
                                    return Math.ceil((x/30)) + " KİŞİ";
                                }
                                    else if(derece == "YB") 
                                    {
                                        return Math.ceil((x/40)) + " KİŞİ";                
                                    }
                                        else if(derece == "YC") 
                                        {
                                            return Math.ceil((x/50)) + " KİŞİ";
                                        }   
                            }
            
}   