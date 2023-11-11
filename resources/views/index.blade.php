@extends('layout-main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div id="page-introduction">
                <h1 class="mb-3">Rövid áttekintő</h1>
                <p>A <strong>Nemzeti Bajnokság</strong>, más néven <strong>NB I</strong>, a magyar labdarúgó-bajnokság legmagasabb szintje. A liga hivatalos elnevezése az OTP Bank Liga, melyet a legnagyobb szponzora után kapott. Az UEFA jelenlegi (2023) besorolása alapján a 25. helyen áll.</p>
                <p>A bajnokságban tizenkét csapat mérkőzik meg egymással háromszor. Egyszer itthon, egyszer idegenben, a harmadik meccset pedig abban a stadionban játsszák, ahol az utolsó meccset nem játszották. A szezon végén az élvonal az UEFA Bajnokok Ligája selejtezőjébe, a második és a harmadik helyezett pedig a Magyar Kupa győztesével együtt az UEFA Európa Konferencia Liga selejtezőkörébe kerül. Az alsó két klub kiesik a másodszintű Nemzeti Bajnokság II-be, helyére a győztes és az NB2 második helyezettje kerül.</p>
                <p>Amennyiben regisztrált felhasználónk, <strong> szerkesztheti a tabella adatait (forrás: NB1 adatbázis)</strong> és
                    játékosokat.</p>
                <p>Az oldalon található egy részletes <strong> kereső </strong>, amivel születési dátumok közötti
                    intervallumra
                    szűrve keresheti az adott csapat játékosait, melyet a végén <strong> PDF formátumban
                        letölthet.</strong></p>
            </div>
        </div>
    </div>
    <hr>
    <section id="hirek">
        <h1 class="mb-4 mt-5">Hírek</h1>
        <article>
            <h4 class="news-title">AKKOR SEM DŐLHET HÁTRA A MAGYAR VÁLOGATOTT, HA LITVÁNIÁBAN ÖSSZEJÖN AZ EB-KVALIFIKÁCIÓ</h4>
            <div class="news-body">
                <img width="300" src="{{ asset('img/elso_cikk.jpg') }}" alt="Szoboszlai Dominik">
                <p>A magyar válogatott ma este Litvániában vendégeskedik. Amennyiben Marco Rossi együttese nyer, bebiztosítja a helyét a jövő évi Európa-bajnokság mezőnyében. Más eredmény esetén is összejöhet a kvalifikáció, a különböző forgatókönyvekről itt írtunk. Az M4 Sport rávilágított arra, hogy a kijutás bebiztosítása után sem dőlhet hátra nemzeti együttesünk:</p>
                <p>Sokat érhet egy huszáros hajrá.</p>
                <p>„Marco Rossi csapata a jelenlegi állás szerint a második kalapban szerepel Anglia, Albánia, Szlovénia, Románia és Ausztria társaságában, míg az elsőben a „rögzített” tag németek mellett Portugália, Franciaország, Belgium, Törökország és Spanyolország található. Amennyiben a magyarok a hátralévő három Eb-selejtező mindegyikét megnyerik, akkor legalább az ötödik legtöbb pontot gyűjtő csoportelsők lesznek, azaz biztosan az első kalapból várhatják a sorsolást, amely egyrészt óriási siker, másrészt így a mieink a legerősebb csapatokat elkerülik a 2024-es Európa-bajnokság csoportkörében” – olvasható a cikkben.</p>
            </div>
        </article>
        <article>
            <h4 class="news-title">U19: DUPLÁN FÁJÓ VERESÉGET SZENVEDETT A MAGYAR VÁLOGATOTT</h4>
            <div class="news-body">
                <img width="300" src="{{ asset('img/masodik_cikk.jpg') }}" alt="">
                <p>A magyar U19-es válogatott kedd délután Norvégiával csapott össze a lettországi Eb-selejtező harmadik, egyben utolsó fordulójában. A mieink a lettek elleni 1-1-es döntetlennel kezdtek, aztán Gibraltár legyőzése nem okozott gondot (6-0). Az északiak két kört követően hibátlan mutatóval rendelkeztek.</p>
                <p>Döntő volt a második félidő eleje.</p>
                <p>A mai találkozó első játékrésze nem hozott gólt, aztán a második félidő eleje nagyon rosszul alakult, mivel az 57. percben már 2-0-ra vezettek a norvégok. Sokáig nem módosult az eredmény, majd a 85. minutumban egy védelmi megingást Klausz Milán büntetett meg. A hátralévő időben küzdöttünk az egyenlítésért, de sajnos nem jártunk sikerrel.</p>
                <p>Ez a vereség duplán fájó, mivel Lettország 8-0-ra verte Gibraltárt, így a norvégok mellett a lettek jutottak tovább. Ugyan a mieink ugyanannyi pontot gyűjtöttek, mint Lettország, de a rosszabb gólkülönbségük miatt csak a csoport harmadik helyén zártak.</p>
                

            </div>
        </article>
        <article>
            <h4 class="news-title">MAGYAR SZURKOLÓKAT VETTEK ŐRIZETBE LITVÁNIÁBAN, SZIJJÁRTÓ PÉTER FONTOS INFORMÁCIÓKAT OSZTOTT MEG</h4>
            <div class="news-body">
                <img width="300" src="{{ asset('img/harmadik_cikk.jpg') }}" alt="">
                <p>Öt magyar konzul is jelen lesz a magyar és a litván labdarúgó-válogatott Európa-bajnoki selejtezőjének helyszínén kedd este Kaunasban, akik szükség esetén segítséget nyújthatnak a magyar szurkolóknak, közölte Szijjártó Péter külgazdasági és külügyminiszter kedden Pekingben – számolt be az MTI.</p>
                <p>Több mint 1000 jegyet vásároltak a drukkerek.</p>
                <p>Öt magyar konzul is jelen lesz a magyar és a litván labdarúgó-válogatott Európa-bajnoki selejtezőjének helyszínén kedd este Kaunasban, akik szükség esetén segítséget nyújthatnak a magyar szurkolóknak, közölte Szijjártó Péter külgazdasági és külügyminiszter kedden Pekingben – számolt be az MTI.</p>
                <p>A tárcavezető arról számolt be, hogy eljött a mérkőzés napja, amelyen „végleg eldőlhet az, amit szívünk mélyén már most eldőltnek érzünk, hogy a magyar válogatott egyenes ágon, csoportelsőként kijuthat a jövő évi Európa-bajnokságra”.</p>
                <p>„Ehhez Litvániában jó lenne nyerni. Az biztos, hogy a szurkolókon nem fog múlni, hiszen mind az 1500 vendégjegyet megvásárolták” – mondta, hozzáfűzve, hogy az érintettek alapvetően egyénileg utaznak a balti országba.</p>
                <p>„Azt kérem mindenkitől, hogy vigyázzanak magukra, és ha bármifajta ügyes-bajos dolguk akad, akkor forduljanak bizalommal azon öt konzul kollégám egyikéhez, akik már a helyszínen vannak” – emelte ki.</p>
            </div>
        </article>
    </section>
@endsection
