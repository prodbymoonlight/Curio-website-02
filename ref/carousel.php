<section style="margin-left: 5rem;">
<h2>Leerjaar 1</h2>
<p>Kom alles in het kort te weten over onze vakken wat het eerste leerjaar betreft.</p>
</section>

<section class="carousel">

<li>
    <img src="../img/code-01.jpg" alt="">
    <section>
    <h3 style="margin-bottom: 1rem;">Native</h3>
    <p>Leer talen zoals Python en C# (c-sharp) om spellen naast applicaties te ontwikkelen.</p>
    <section>
</li>
<li>
    <img src="../img/web-code.jpg" alt="">
    <section>
    <h3 style="margin-bottom: 1rem;">Web</h3>
    <p>Krijg de mogelijkheid om vaardigheden te onwikkelen zodat jij jouw eigen droom-website in elkaar zult flansen.</p>
    </section>
<li>
    <img src="../img/praktijk.png" alt="">
    <section>
    <h3 style="margin-bottom: 1rem;">Praktijk</h3> 
    <p>Wordt jij ook zo moe van al die theorie? Schuif dan lekker aan bij of maak jouw eigen groep, om vervolgens websites, applicaties, of een mengsel van te creeëren.</p>
    </section>
</li>
<li>
    <img src="../img/students.jpg" alt="" style="object-fit: fill;">
    <section>
    <h3 style="margin-bottom: 1rem;">Mentoruur</h3>
    <p>Het equivelent van nieuwsuur, maar dan hier op school! Daarnaast zal je mentor indien nodig hulp kunnen verlenen, vergeet het dan niet te vragen.</p>
    </section>
</li>
<li>
    <img src="../img/Beeldbank_Curio_Mbo/Mbo/Studeren in coronatijd rechtenvrije foto Pexels.jpg" alt="">
    <section>
    <h3 style="margin-bottom: 1rem;">Praktijk Ondersteuning</h3>
    <p>Zit jij ook in de bodem van de put wanneer het komt tot omgaan met je collega's, vrienden, en of groepsgenoten? Vrees niet, praktijk ondersteuning is hier om jouw gebrek aan ervaring te compenseren!</p>
    </section>
</li>
<li>
    <img src="../img/20240805_002811.jpg" alt="" style="object-fit: fill;">
    <section>
    <h3 style="margin-bottom: 1rem;">DIV</h3>
    <p>Is er bij jouw hoofd naar binnen gekeken, en zit er helemaal niets? <br>Vergeet dan niet bij DIV aan te schuiven en binnenkort in therapie te belanden. Daarnaast heeft dit vak de AI-brigade aangewoekerd.</p>
    </section>
</li>

</section>

<!-- CSS -->
<style>
.carousel {
    list-style: none;
    margin: 5rem;
    padding: 0;

    mask: linear-gradient(to right, transparent 0%, black 2%, black 98%, transparent 100%);
    
    /* border-top: 4px dashed rgba(0,0,0,0.5); */
    /* border-bottom: 4px dashed rgba(0,0,0,0.5); */

    display: grid;
    gap: 2rem;
    grid-auto-flow: column;
    grid-auto-columns: 60%;

    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    overscroll-behavior-x: contain;

    scroll-marker-group: after;

    anchor-name: --carousel;

    &::-webkit-scrollbar {
        display: none;
    }

    &::scroll-marker-group {
        display: flex;
        justify-content: center;
        gap: .5rem;
        padding: 2rem;
    }

    > li {
        scroll-snap-align: center;
        padding: 20px;
        /* box-shadow: 0px 2px 4px rgba(0,0,0,0.1); */

        display: grid;
        grid-template-areas: "stack";
        
        > img {
            grid-area: stack;
            width: 100%;
            height: auto;

            aspect-ratio: 16 / 9;
            object-fit: cover;

            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0,0,0,0.5);
        }
        > section {
            grid-area: stack;
            align-self: end;

            position: relative;
            z-index: 0;

            margin: 20px;

            > * {
                color: #fff;
            }
            &::after {
                content: '';
                inset: 0;
                position: absolute;
                
                left: 0;
                bottom: 0;
                
                width: 100%;
                height: 100%;
                
                margin: -20px;
                padding: 20px;

                border-bottom-left-radius: 8px;
                border-bottom-right-radius: 8px;

                z-index: -1;
                background: rgba(0,0,0,0.5);
            }
        }

        &::scroll-marker {
            content: '';
            width: 20px;
            height: 20px;
            aspect-ratio: 1 / 1;
            border-radius: 100%;
            border: 2px solid CanvasText;
        }

        /* &::scroll-marker:hover, 
        &::scroll-marker:focus-visible {
            border: 10px red solid;
        } */

        &::scroll-marker:target-current {
            background: LinkText;
        }
    }
    &::scroll-button(*) {
        position: fixed;
        position-anchor: --carousel;

        color: gray;
        border: none;
        box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
        border-radius: 50%;

        font-size: 28px;
        font-weight: 700;
        font-family: inherit;
        text-align: center;

        margin: 1rem;
    }

    &::scroll-button(right) {
        content: '⮕' / 'Scroll Left';
        position-area: center right;
    }
    &::scroll-button(left) {
        content: '⬅' / 'Scroll Right';
        position-area: center left;
    }
}
</style>