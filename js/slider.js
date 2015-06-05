var timer = 1;
$(document).ready(function(){

    galeria();
});

function galeria(){
    cargar();
    setTimeout("galeria()",2500);
    if( timer == 39) timer = 1;
}

function cargar(){
    $("#galeria").fadeTo(2000,1.0);
    switch( timer ){//
      case 1: $("#mi_pic").attr("src","http://peliculasaudiolatino.com/1movieimg/movie1431627552.jpg"); break;
      case 2: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-BvKJNNF0xlA/VBlt62l7DvI/AAAAAAAAPtQ/DQGBC-Fd2UY/s1600/R%C3%A1pidos%2By%2BFuriosos%2B7%2B(2015).jpg"); break;
      case 3: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-_Od69W5XOAg/U_e1OrQkkJI/AAAAAAAAO78/Bb8nJzrBONE/s1600/Ouija.jpg"); break;
      case 4: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-MPvrfhSei1w/U-C75kUAT5I/AAAAAAAAN_s/ywNDFU8WuuY/s1600/SpongeBob_Movie_Sponge_Out_of_Water_.jpg"); break;
      case 5: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-p6FFqjHTlJc/VClN4pbA98I/AAAAAAAAch4/XGZJO8rl0pE/s1600/birdman.jpg"); break;
      case 6: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-BIwqyY0NlZ8/U6nF1UTsgLI/AAAAAAAAbuk/tLXD3TmcRic/s1600/Los_ping%C3%BCinos_de_Madagascar.jpg"); break;
      case 7: $("#mi_pic").attr("src","http://4.bp.blogspot.com/-En1bY4707-8/U-S5FFVlsHI/AAAAAAAAOJ8/86x5bOrsTyY/s1600/Dumb_and_Dumber_To.jpg"); break;
      case 8: $("#mi_pic").attr("src","http://4.bp.blogspot.com/-4gbRJvTqyeU/VVKKe0UbSGI/AAAAAAAAUHM/-8Q-uzaTfkI/s1600/Dragon_Ball_Z.jpg"); break;
      case 9: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-1y9MCDELsws/VSvCVMn29KI/AAAAAAAAT0E/9Ov2L_FuzPc/s1600/Toy%2BStory%2BThat%2BTime%2BForgot%2B(2014).jpg"); break;
      case 10: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-acZIFTSmVzk/VT5PLKKErVI/AAAAAAAAdXo/sYLrBs9ucco/s1600/Naruto%2BShipp%C5%ABden%2B7%2BLa%2B%C3%BAltima%2B(2014).jpg"); break;
      case 11: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-lMnJ03r0SiI/VUoRgHrp6uI/AAAAAAAAUBs/XWfUMhc4o90/s1600/Well_Never_Have_Paris.jpg"); break;
      case 12: $("#mi_pic").attr("src","http://2.bp.blogspot.com/-7lob9WHpwy0/VVnh6PRpg3I/AAAAAAAAUKQ/yY1xyIU8UT4/s1600/BFFs%2B%282014%29.jpg"); break;
      case 13: $("#mi_pic").attr("src","http://2.bp.blogspot.com/-AFrXDCdkMss/VUdkQmKrf9I/AAAAAAAAT-k/-_lrq56C4fI/s1600/Just%2BBefore%2BI%2BGo%2B(2014).jpg"); break;
      case 14: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-fSsod-9GT8w/VJcZi92tVWI/AAAAAAAARXU/K-H76qxJWpg/s1600/Get%2BHard.jpg"); break;
      case 15: $("#mi_pic").attr("src","http://2.bp.blogspot.com/-C6ggf9vb2xA/VQRjV6QIZOI/AAAAAAAATNQ/OVYs0bjhTWs/s1600/Zapatero%2Ba%2Btus%2Bzapatos.jpg"); break;
      case 16: $("#mi_pic").attr("src","http://3.bp.blogspot.com/-BG9f6sW4XZo/VSJ00MDk6RI/AAAAAAAAToo/1PCWtfeB3qU/s1600/Death%2BFactory%2B(2014).jpg"); break;
      case 17: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-s08N6wEco24/VSVpNJUTaYI/AAAAAAAATuk/dHre-PfIo0A/s1600/Girlhouse%2B(2014).jpg"); break;
      case 18: $("#mi_pic").attr("src","http://4.bp.blogspot.com/-Cn5ZEgRshsQ/VTjzNozcy_I/AAAAAAAAdWE/ejlhu5v8iKU/s1600/Musara%C3%B1as%2B(2014).jpg"); break;
      case 19: $("#mi_pic").attr("src","http://3.bp.blogspot.com/--AGHF0RBopo/VUThJlHjWGI/AAAAAAAAT9g/Qd5PqMesioM/s1600/Sorrow%2B(2015).jpg"); break;
      case 20: $("#mi_pic").attr("src","http://3.bp.blogspot.com/-JhimLzzVXHQ/VUdedi4VgvI/AAAAAAAAT-A/tRmW-fBWhtM/s1600/Strange_Blood.jpg"); break;
      case 21: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-qLdLfrKuxN0/U_eiM14AXlI/AAAAAAAAO50/1YAWbXIa9Ck/s1600/The_Possession_of_Michael_King.jpg"); break;
      case 22: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-rWWOxwg-dF8/VVH4mfMwEZI/AAAAAAAAUGo/7wR6TpwM8vg/s1600/The%2BLast%2BSurvivors%2B(2014).jpg"); break;
      case 23: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-UrZVvQCnjcw/VJD_hrWLq5I/AAAAAAAARQA/l-IBSW36sbI/s1600/Bienvenidos%2Bal%2Bayer%2B(2015).jpg"); break;
      case 24: $("#mi_pic").attr("src","http://2.bp.blogspot.com/-m6v8TsfnIns/VMzH-6gB72I/AAAAAAAASN0/SNfsPfX3Ryk/s1600/El_destino_de_Jupiter.jpg"); break;
      case 25: $("#mi_pic").attr("src","http://3.bp.blogspot.com/-hh3oP8hqHXA/VSfF_YIvYbI/AAAAAAAATw0/wgUfyknpO14/s1600/Apocalipsis%2Ben%2BLos%2B%C3%81ngeles%2B(2014).jpg"); break;
      case 26: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-08C1yYBi8Gk/VGnUqcwP0UI/AAAAAAAAQtU/IEwZGO-L5YE/s1600/Insurgente%2B(2015).jpg"); break;
      case 27: $("#mi_pic").attr("src","http://4.bp.blogspot.com/-BGLTuHaGRac/U90DXIWvHJI/AAAAAAAAN3I/WxegkdkO5m0/s1600/Libertador.jpg"); break;
      case 28: $("#mi_pic").attr("src","http://3.bp.blogspot.com/-9cZz5KtRHUI/VTQcMCV8loI/AAAAAAAAT6M/fh6uzQ4aWCc/s1600/El%2B%C3%BAltimo%2Blobo%2B(2015).jpg"); break;
      case 29: $("#mi_pic").attr("src","http://3.bp.blogspot.com/-6dV4n8SVrJ0/VTjvNSdeciI/AAAAAAAAdV8/GqIum_u7pOY/s1600/K-9%2BAdventures%2BLegend%2Bof%2Bthe%2BLost%2BGold%2B(2014).jpg"); break;
      case 30: $("#mi_pic").attr("src","http://2.bp.blogspot.com/--Q6_jI8TUeM/VVngwiFp0TI/AAAAAAAAUKI/JZ0jXCXPOas/s1600/Journey%2BTo%2BDinosaur%2BIsland%2B%282014%29.jpg"); break;
      case 31: $("#mi_pic").attr("src","http://4.bp.blogspot.com/--UUn8KA5ElE/U7GKCEPjBEI/AAAAAAAANZA/4WaE2KH8FJY/s1600/el_inventor_de_juegos.jpg"); break;
      case 32: $("#mi_pic").attr("src","http://2.bp.blogspot.com/-ZUJsWZ59QkI/VNOdUFnEjqI/AAAAAAAASW4/85sXG-SmXK4/s1600/Northmen%2BA%2BViking%2BSaga%2B(2014).jpg"); break;
      case 33: $("#mi_pic").attr("src","http://4.bp.blogspot.com/-Ykm6yUvSCks/VUjMeUgoEZI/AAAAAAAAUAM/_hAixm5VHKA/s1600/Aliens%2Bon%2Bthe%2BMoon%2BThe%2BTruth%2BExposed%2B(2014).jpg"); break;
      case 34: $("#mi_pic").attr("src","http://1.bp.blogspot.com/-FGnhkNJulQU/VNi1u6bzJnI/AAAAAAAAdIc/fDNO2ZHjYwk/s1600/Citizenfour%2B(2014).jpg"); break;
      case 35: $("#mi_pic").attr("src","http://4.bp.blogspot.com/-3Fe1AILHFfo/VQrzNwPgrLI/AAAAAAAATXw/c3CM627DE70/s1600/Island%2Bof%2BLemurs%2BMadagascar%2B(2014).jpg"); break;
      case 36: $("#mi_pic").attr("src","http://2.bp.blogspot.com/-OCUcoJsiXEg/VPRiPjxtFII/AAAAAAAAS1Q/Ni8zqr821L0/s1600/Night%2BWill%2BFall%2B(2014).jpg"); break;
      case 37: $("#mi_pic").attr("src","http://4.bp.blogspot.com/-DQHDYn164SY/U0dalZhW3UI/AAAAAAAAaYg/tMGiirtdPsY/s1600/El_Expreso_Polar.jpg"); break;
      case 38: $("#mi_pic").attr("src","http://2.bp.blogspot.com/-PqA_kAQ7QD0/VLpgxwQZNvI/AAAAAAAAR30/J_rFvCvIUmk/s1600/The%2BGunman%2B(2015).jpg"); break;

    }$("#galeria").fadeOut();
   timer++;
}
