<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<?php require_once 'ref/header.php'; ?>
<body>
    <main>
        <div class="wrapper">
            <video src="video/mbo-opleiding-softwaredeveloper-bijgesneden.mp4" autoplay loop muted></video>
            <section class="partial-size center-left">
                <h3 style="color: #fff;">HTML, CSS, PHP, MySQL, C#, Python</h3>
                <h1 style="color: #fff;">Software Developer</h1>
                <p style="color: #fff; margin-bottom: 20px;">Duik net zoals ons in de wonderen van technologie, waargemaakt door ons beroep! Hier zal u meerdere bronnen aan informatie over verschillende aspecten vinden wat deze opleiding betreft. Heeft u de website doorlopen, en wilt u nog meer weten? Klik dan vliegensvlug op het Curio&trade; logo en zoek alles gerust op uw eigen tempo uit. Wij wensen u een magnifieke dag toe!</p>
                <button class="call-to-action" onclick="ScrollDown()">Meer informatie<span></span></button>
            </section>
        </div>

        <section class="full-size" id="animate">
            <?php require_once 'ref/carousel.php'; ?>
        </section>

        <hr class="line-01">
        <section style="margin-left: 5rem; margin-top: 5rem;">
          <h2>Rooster</h2>
          <p>Een vooruitzicht en voorbeeld van het rooster</p>
          
          <section class="full-size vertical-grid">
              <img src="img/overzicht blok a.jpg" alt="">
              <img src="img/overzicht blok b.jpg" alt="">
          </section>

        </section>

        <hr class="line-02">
        <section style="margin-left: 5rem; margin-top: 5rem;"> 
          <section class="vertical-grid" style="gap: 5rem;">
              <section style="border-radius: 8px; box-shadow: 0px 2px 4px rgba(0,0,0,0.2); padding: 20px;">
                <h3 class="title">De Sfeer</h3>
                <p class="description">
                   <h4 class="sub-title">De klas</h4>
                   <span class="sub-description">Bij de afdeling Software-Developer hangt een overheerlijke sfeer op basis van waarop je bent ingesteld.
                   Het kan net zoals overal een luidruchtig prikkel-festein worden, of een heerlijk vredevol hiernamaals. 
                   De klassen rijken van pak een beet 20 leerlingen, waarvan je snel kan merken welke je wel of niet liggen, 
                   helaas valt het onverstandig AI gebruik zeer snel in de klas geroken te kunnen worden. </span>
                   
                   <h4 class="sub-title">Leervaardigheid</h4>
                   <span class="sub-description">De meeste docenten zijn vrij behulpzaam, en helpen je graag verder waar jij vastloopt. Natuurlijk kan je 
                   niet verwachten dat ze het ruiken, dus is het een goed idee om aan te geven wanneer het niet soepeltjes 
                   loopt. Los van de lessen en rol van docenten, zijn het aangename mensen die er niet alleen maar zijn 
                   om je iets aan te leren, maar juist om dat samen te doen. </span>
                   
                   <h4 class="sub-title">Zelf-groei</h4>
                   <span class="sub-description">Je krijgt de vrijheid en ruimte om jou zelf verder te ontwikkelen op vlakken die jou het meest prikkelen.
                   Roof jezelf niet van deze mogelijkheid door je leven op te vullen met ongerelateerde verleidelijke bezigheden, 
                   en vind voldoening in het eigen ontwikkelen van applicaties en jezelf. Kom niet in de val van AI terecht. </span>
                </p>
              </section>
              <img src="img/Beeldbank_Curio_Mbo/MBO/GettyImages-1127305026.jpg" alt="Visueele Toevoeging" style="object-fit: cover;">
            </section>

        </section>
                <section style="margin-left: 5rem; margin-top: 5rem;"> 
          <section class="vertical-grid" style="gap: 5rem;">
              <img src="img/Beeldbank_Curio_Mbo/MBO/GettyImages-827810758.jpg" alt="Visueele Toevoeging" style="object-fit: cover;">
              <section style="border-radius: 8px; box-shadow: 0px 2px 4px rgba(0,0,0,0.2); padding: 20px;">
                <h3 class="title">Onder andere</h3>
                <p class="description">
                   <h4 class="sub-title">Huiswerk</h4>
                   <span class="sub-description">Bij de vakken Web en Native krijg je in vrijwel iedere les nieuwe stof aangereikt. Het huiswerk dat 
                   hierbij hoort hoef je niet direct af te hebben maar je krijgt tot het einde van het blok de tijd om dit uit 
                   te werken en in te leveren. Naast deze vakken komt het ook regelmatig voor dat je huiswerk moet maken voor 
                   andere onderdelen van de opleiding, zoals PRO Mtu of Nederlands.</span>
                   
                   <h4 class="sub-title">Versnellen</h4>
                   <span class="sub-description">Aan het einde van het eerste jaar als je goede cijfers hebt gehaald en merkt dat je de stof gemakkelijk
                   begrijpt kun je in aanmerking komen om te versnellen. Als je toestemming van de docenten hebt die beoordelen 
                   of je het niveau aankunt mag je de opleiding in een kortere tijd afronden. In plaats van vier jaar kun je de 
                   opleiding dan in drie jaar voltooien. Versnellen geeft je de mogelijkheid om sneller door de opleiding heen 
                   te gaan en eerder je diploma te behalen.</span>
                   
                   <h4 class="sub-title">Ervaring</h4>
                   <span class="sub-description">Ik vind de opleiding Software Developer echt interessant en leerzaam. Het leuke is dat het heel creatief 
                    is omdat je zelf oplossingen bedenkt en dingen maakt die echt werken. Elke opdracht voelt weer als een nieuwe 
                    uitdaging waar ik mijn eigen ideeën in kwijt kan. De lessen zijn duidelijk en geven me genoeg vrijheid om 
                    zelfstandig aan de slag te gaan. De sfeer in de klas en met de docenten is gezellig en fijn. Dat zorgt 
                    ervoor dat ik gemotiveerd blijf en steeds verder wil leren.</span>
                </p>
              </section>
            </section>

        </section>
    </main>
</body>
<?php require_once 'ref/footer.php'; ?>
<!-- <script src="java/spotlight.java"></script> -->
<script>
function ScrollDown() {
    window.scrollTo({top: window.innerHeight, behavior: 'smooth'});
}
</script>
<script src="java/animationPlayer.java"></script>
</html>

<style>
.line-01 {
  border: 20px solid gray; 
  margin-bottom: 0;
}
.line-02 {
  border: 10px solid gray;

  margin-bottom: 0; 
  margin-top: 5rem; 
  margin-left: auto; 
  margin-right: auto; 

  border-radius: 16px; 
  width: 90%;
}
</style>

<style>

.title {
  margin-bottom: 1.5rem;
}
.sub-description {
  display: block;
  margin-bottom: 1rem;
}

</style>

<style>
.full-size {
  width: 100%;
  height: 100dvh;
}
.partial-size {
    max-width: 75ch;
    height: 100dvh;
}
.center-left {
    display: flex;
    flex-direction: column;

    margin: 0 -100px;
    margin-top: -50px;
    text-align: left;
    justify-content: center;
}
.vertical-grid {  
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    width: 95%;
    margin-top: 5rem;
    height: fit-content;

    > img {
        object-fit: contain;
        width: 100%;
        height: 100%;

        border-radius: 8px;
        box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
    }
}
.call-to-action {
  background-color: rgb(48, 121, 222);
  color: white;
 
  font-weight: bold;
  font-size: 18px;
 
  text-decoration: none;
  text-align: center;
 
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
 
  box-shadow: 0px 2px 4px rgba(202, 151, 83, 0.2);
  transition: all 0.2s ease-in-out;

  &::before {
    position: absolute;
    inset: 0;
    
    background-color: purple;
    padding: 20px;
  }
  &:hover {
    background-color: rgb(48, 130, 222);
    cursor: pointer;

    > span::before {
      margin-left: 0;
      opacity: 1;
    }
  }

  > span {
    font-size: inherit;
    color: #fff;
    
      &::before {
        text-align: center;
        content: " \27A4";
    
        transition: all 0.2s ease-in-out;
    
        margin-left: -20px;
        opacity: 0;
    }
  }
}
</style>