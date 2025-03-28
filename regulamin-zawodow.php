<?php
  require("global.php");
  require("head.php");
?>
</head>
<body>
  <?php
    require("menu-nav.php");
  ?>
  <div class="hero" style="background-image: url('<?php echo $global_domain; ?>/static/img/thewinneris.png');">
    <div class="hero-content">
      <?php if (1==1) { ?>
      <div class="hero-bg-img">
      <a href="zgloszenie-udzialu.php"><img src="<?php echo $global_domain; ?>/static/img/tlofbmma.png"></a>
      </div>
      <?php } else { ?>
      <h1></h1>
      <p></p>
      <?php } ?>
    </div>
  </div>

  <!-- Main Content -->
  
  <style>
    ol, ul {
      list-style: none;
      margin-left: -1em;
    }
  </style>
  <div class="main-wrap">
    <h1 class="font-weight-thin text-left">REGULAMIN ZAWODÓW I ZASADY WALKI</h1>
    <div class="row">
      <ol>
        <li>
          <h2>1. Objaśnienie formuł turnieju MMA</h2>
          <ul>
            <li><h3>1. Turniej senior + 21 pierwszy krok</h3> przeznaczony dla zawodnika który posiada nie więcej niż 3 walki amatorskie niezależnie od ich wyniku.</li>
            <li><h3>2. Turniej senior + 21</h3> przeznaczony dla zawodnika który posiada zerowy rekord w walkach profesjonalnych w MMA i innych sztukach walki, 
            nie posiada podpisanego kontraktu promotorskiego i nie posiada licencji zawodnika profesjonalnego wydanej przez jakąkolwiek organizację sportów walki. 
            Ewentualne wątpliwość dotyczące możliwości startu zawodnika jako amatora rozstrzyga po weryfikacji Organizator turnieju.
            <li><h3>3. Turniej senior + 21 full contact</h3> przeznaczony dla zawodnika który który posiada rekord w walkach profesjonalnych w MMA i innych sztukach walki, może posiadać podpisany
            kontrakt promotorski, posiada licencji zawodnika profesjonalnego wydaną przez jakąkolwiek organizację sportów walki, lecz nie stoczył więcej niż 5 profesjonalnych
            pojedynków bez wzgledu na wynik. Ewentualne wątpliwość dotyczące możliwości startu zawodnika jako amatora rozstrzyga po weryfikacji Organizator turnieju.
          </ul>
          <h2>2. Kategorie wiekowe</h2>
          <ul>
            <li>a) Junior – osoba, która na dzień zawodów ma ukończony 18 rok życia i nie ma ukończonego 21 roku życia</li>
            <li>b) Senior – osoba, która na dzień zawodów ma ukończony 21 rok życia</li>
            <li>c) Każdy junior ma prawo startować w zawodach w kategoriach seniorskich</li>
          </ul>
          <h2>3. Kategorie wagowe</h2>
          <ul>
            <li>a) Jeśli federacja nie zatwierdzi pojedynku w innej kategorii wagowej, turniej rozgrywany będzie w następujących kategoriach:</li>
            <li>b) Kobiety (Junior, Senior, Pierwszy krok, Full contact)
              <ul>
                <li>• Waga atomowa (105 lbs) 47.6 kg</li>
                <li>• Waga słomkowa (115 lbs) 52.2 kg</li>
                <li>• Waga musza (125 lbs) 56.7 kg</li>
                <li>• Waga kogucia (135 lbs) 61.2 kg</li>
                <li>• Waga piórkowa (145 lbs) 65.8 kg</li>
                <li>• Waga lekka (155 lbs) 70.3 kg</li>
              </ul>
            </li>
            <li>c) Mężczyźni (Junior, Senior, Pierwszy krok, Full contact )
              <ul>
                <li>• Waga słomkowa (115 lbs) 52.2 kg</li>
                <li>• Waga musza (125 lbs) 56.7 kg</li>
                <li>• Waga kogucia (135 lbs) 61.2 kg</li>
                <li>• Waga piórkowa (145 lbs) 65.8 kg</li>
                <li>• Waga lekka (155 lbs) 70.3 kg</li>
                <li>• Waga półśrednia (170 lbs) 77.1 kg</li>
                <li>• Waga średnia (185 lbs) 83.9 kg</li>
                <li>• Waga półciężka (205 lbs) 93 kg</li>
                <li>• Waga ciężka (265 lbs) 120.2 kg</li>
                <li>• Waga super ciężka do kg (661 lbs) 300 kg</li>
              </ul>
            </li>
          </ul>
          <h2>4. Procedura ważenia</h2>
          <ul>
            <li>a) Ważenie zawodników odbywa się w dniu zawodów</li>
            <li>b) Ważenie może odbywać się w jednym lub kilku miejscach jednocześnie.</li>
            <li>c) Organizator dostarcza wystarczającą ilość skalibrowanych elektronicznych wag (z dokładnością do 1/10kg).</li>
            <li>d) Zawodnicy mają prawo skorzystać z wagi od momentu pojawienia się w miejscu zawodów.</li>
            <li>f) Zawodnik powinien być ważony jedynie w bieliźnie.</li>
            <li>g) W wypadku przekroczenia limitu wagi, zawodnik może zostać poproszony o zdjęcie bielizny.</li>
            <li>h) W trakcie oficjalnego ważenia nie ma tolerancji wagowej (zarówno powyżej jak i poniżej limitu kategorii)</li>
            <li>i) Dozwolone jest tylko jedno oficjalne ważenie zawodnika.</li>
            <li>j) Jeśli zawodnik nie stawi się na ważenie w trakcie czasu oficjalnego ważenia, informacja ta zostanie zapisana na liście zawodniczej, a zawodnik zostanie zdyskwalifikowany.</li>
          </ul>
          <h2>5. Wyposażenie ochronne</h2>
          <ul>
            <li>a) Wszyscy walczący mężczyźni muszą zapewnić sobie i nosić ochraniacz na krocze. Kobiety mogą nosić ochraniacz na krocze, jeśli sobie tego życzą</li>
            <li>b) Stosowanie ochraniaczy goleni będzie obowiązkowym wymogiem w amatorskich zawodach mieszanych sztuk walki. Rodzaj zastosowanych osłon goleni powinien być w stanie ułatwić aspekty grapplingowe w trakcie walki</li>
            <li>c) Preferowany typ nagolenników to obcisła skarpeta z podbiciem / neoprenowy ochraniacz na goleń. Używanie ochraniaczy goleni z zapięciami na rzepy lub używanie innych substancji niż te, z których wykonano ochraniacze goleni, jest zabronione.</li>
            <li>d) Wszystkie rashguardy powinny być z krótkim rękawem. Rashguardy z długim rękawem nie są dozwolone (chyba, że organizator, ze względu na religię lub różnice kulturowe, wyrazi zgodę na ich użycie)</li>
          </ul>
          <h2>4. Zawodnicy pierwszego kroku toczą pojedynki w kaskach ochronnych i rękawicach</h2>
          <ul>
            <li>a) Przez cały czas trwania zawodów można używać wyłącznie rękawic dostarczonych przez Organizatora</li>
            <li>b) Wszyscy zawodnicy powinni nosić rękawice z wyściółką ochronną o wadze co najmniej 6 uncji i nie więcej niż 8 uncji</li>
            <li>c) Rękawice do zawodów amatorskich należy uznać za wyraźnie odmienne od tych używanych zgodnie z zasadami zawodowymi i mieć ich estetykę</li>
            <li>d) Zawodnikom nie wolno dostarczać własnych rękawic</li>
            <li>e) Rękawice powinny być otwarte z pętlami na palce i kciuki, aby ułatwić chwytanie. Nadgarstek należy podeprzeć za pomocą paska na rzep. Nie są dozwolone sznurowane rękawice</li>
            <li>f) Rękawice powinny być w kolorze czerwonym lub niebieskim</li>
          </ul>
          <h2>9. Strój zawodnika</h2>
          <ul>
            <li>a) Każdy zawodnik musi nosić spodenki do mma/spodenki kompresyjne. Bez kieszeni, zamków błyskawicznych, zapięć. Jakiekolwiek obce substancje inne niż materiał, z którego wykonane są szorty, nie mogą być obecne na szortach. Zewnętrznie sznurowane szelki po zewnętrznej stronie szortów nie są dozwolone, muszą znajdować się w pasie szortów.</li>
            <li>b) Buty oraz inne ochraniacze stóp są zabronione</li>
            <li>c) Federacja rozumie i udziela specjalnej dyspensy wszelkim przekonaniom i praktykom religijnym i kulturowym. Każda zawodniczka, która chce nosić rashguardy z długim rękawem i legginsy aby zakryć skórę, może to zrobić po uprzednim pisemnym powiadomieniu Organizatora turnieju</li>
          </ul>
          <h2>10. Wygląd zawodnika</h2>
          <ul>
            <li>a) Każdy zawodnik musi być czysty i wyglądać schludnie</li>
            <li>b) Stosowanie wazeliny / olejków lub jakiejkolwiek innej substancji obcej, w tym między innymi kremów, balsamów lub aerozoli do pielęgnacji, nie może być stosowane na twarz, włosy lub ciało zawodnika</li>
            <li>c) Sędzia lub Cutman powinien usunąć nadmiar olejków lub ciał obcych</li>
            <li>d) Sędzia lub Cutman ustala, czy owłosienie głowy lub twarzy stanowi jakiekolwiek zagrożenie dla bezpieczeństwa zawodnika lub jego przeciwnika lub będzie zakłócać przebieg zawodów</li>
            <li>e) Jeśli włosy na głowie lub twarzy zawodnika stanowią takie zagrożenie lub będą zakłócać przebieg zawodów, zawodnik nie może brać udziału w zawodach, chyba że okoliczności stwarzające zagrożenie lub potencjalne zakłócenia zostaną skorygowane w sposób zadowalający dla Organizatora. Nie ograniczając powyższego, włosy na głowie muszą zostać przycięte lub związane w taki sposób, aby nie zakłócały widzenia zawodnikowi lub zakrywały żadnej części twarzy zawodnika.</li>
            <li>f) Zawodnicy / zawodniczki nie mogą nosić biżuterii ani innych akcesoriów oraz kolczyków podczas walki</li>
          </ul>
          <h2>11. Sposób rozgrywania turnieju</h2>
          <ul>
            <li>a) Turniej MMA z rozgrywany jest w zależności od ilości zawodników w danej kategorii wagowej:<br>
              <ul style="list-style: disc;">
                <li>1 zawodnik w kategorii – zawodnik zostanie poinformowany o braku przeciwników i będzie mógł przepisać się do innej kategorii wagowej lub zrezygnować z udziału w turnieju</li>
                <li>Do 3 zawodników – turniej rozgrywany systemem każdy z każdym. Każda walka trwa 3 x 3 minuty z 1 minutowymi przerwami pomiędzy rundami.</li>
                <li>Od 4 zawodników – turniej rozgrywany systemem pucharowym. Wszystkie walki (poza finałową i o 3 miejsce) trwają 1 x 4 minuty ( ewentualna dogrywka 3 minutowa, zarządzana jest w przypadku remisu). Walka finałowa i trwa 3 x 3 minuty z 1 minutowymi przerwami</li>
                <li>W wypadku remisu rozgrywana jest 3 minutowa dogrywka.</li>
                <li>W trakcie trwania turnieju rozgrywane są walki o trzecie miejsce</li>
                <li>Turniej pierwszego kroku rozgrywany jest zgodnie z zasadami powyżej, na dystansie 1 x 4 + ewentualna dogrywka (4 minuty) w wypadku remisu.</li>
              </ul>
            </li>
            <li>b) Turniej MMA full contact z rozgrywany jest w zależności od ilości zawodników w danej kategorii wagowej:<br>
              <ul style="list-style: disc;">
                <li>1 zawodnik w kategorii – zawodnik zostanie poinformowany o braku przeciwników i będzie mógł przepisać się do innej kategorii wagowej lub zrezygnować z udziału w turnieju</li>
                <li>Do 3 zawodników – turniej rozgrywany systemem każdy z każdym. Każda walka trwa 3 x 4 minuty z 1 minutowymi przerwami pomiędzy rundami.</li>
                <li>Od 4 zawodników – turniej rozgrywany systemem pucharowym. Wszystkie walki (poza finałową i o 3 miejsce) trwają 1 x 5 minuty ( ewentualna dogrywka 3 minutowa, zarządzana
                  jest w przypadku remisu). Walka finałowa i 3 x 4 minuty z 1 minutowymi przerwami</li>
                <li>W wypadku remisu rozgrywana jest 3 minutowa dogrywka.</li>
              </ul>
            </li>
          </ul>
          <h2>12. Przerywanie pojedynku</h2>
          <ul>
            <li>Sędzia i lekarz ringowy są jedynymi osobami upoważnionymi do wejścia na pole walki w dowolnym momencie podczas walki, a sędzia jest jedyną osobą upoważnioną do zatrzymania walki.</li>
            </li>
          </ul>
          <h2>13. Sędziowanie punktowe</h2>
          <ul>
            <li>a) Efektywne uderzanie/skuteczne zapasy 
              <div style="margin-left: 1em;">należy uznać za priorytetowe w ocenianiu rundy. Agresywność powinna być brana pod uwagę tylko gdy sędzia nie dostrzega żadnej przewagi jednego z zawodników w efektywnym uderzaniu/skutecznych zapasach. Kontrola ringu powinna być brana pod uwagę tylko, gdy wszystkie inne składowe, w przypadku obydwu zawodników, są równe w 100%.</div>
            </li>
            <li>b) Efektywne uderzanie / skuteczny grappling 
              <div style="margin-left: 1em;">Dozwolone uderzenia, które w sposób natychmiastowy lub poprzez kumulacje uderzeń mogą przyczynić się do zakończenia walki. Pojedynczy dozwolony cios, który ma natychmiastowy wpływ na uderzanego przeciwnika jest oceniany wyżej niż kumulacja uderzeń, która wywoła podobny skutek. Pomyślne wykonanie obalenia, próba poddania, zmiana pozycji i osiągnięcie korzystnej pozycji, które w sposób natychmiastowy lub w wyniku kumulacji przybliżają zawodnika do potencjalnej wygranej przed czasem są oceniane wyżej, niż łączny wpływ tych technik nie dający możliwości zakończenia pojedynku przed czasem. Na skuteczne obalenie nie składa się tylko zmiana pozycji, ale zapewnienie sobie pozycji do ataku po obaleniu przeciwnika. Próby poddania przeciwnika, które widocznie go osłabiają i powodują wyraźne zmęczenie w trakcie obrony i ucieczki, będą oceniane wyżej niż te, z których mógł się łatwo wybronić lub uciec bez zauważalnego zmęczenia. Wysokie wyniesienia, mocne rzuty i sprowadzenia, oceniane są wyżej niż wywrócenie lub przyciśnięcie do maty.</div>
            </li>
            <li>c) Powyższe zasady będą kluczowe w przypadku przeważającej większości decyzji dotyczących punktacji danej rundy. Kolejne dwa kryteria powinny być stosowane tylko w przypadku, gdy Efektywne uderzanie/skuteczny grappling są na w 100% identycznym poziomie przez cały czas trwania rundy.</li>
            <li>d) Efektywna Agresja
              <div style="margin-left: 1em;">Agresywnie podejmowanie próby zakończenia walki. Kluczowym terminem jest „efektywny”. Ściganie przeciwnika bez skutecznego wyniku lub wpływu nie powinno uwzględniać się w ocenach sędziów</div>
            </li>
            <li>e) Kontrola pola walki
              <div style="margin-left: 1em;">Kontrolę obszaru walki ocenia się poprzez określenie, kto dyktuje tempo, miejsce i pozycję walki.</div>
            </li>
            <li>f) Wszystkie walki będą oceniane i punktowane przez trzech sędziów punktowych</li>
            <li>g) System 10 punktów będzie standardowym systemem do punktowania walk</li>
            <li>h) Punktowanie rundy 10-10
              <div style="margin-left: 1em;">Występuje, gdy nie ma możliwości wskazania zawodnika, który w czasie trwania całej rundy, uzyskał jakąkolwiek przewagę nad swoim przeciwnikiem. Punktacja 10 – 10 w MMA powinna być stosowana w wyjątkowych przypadkach i nie może być dla sędziów wymówką, usprawiedliwiającą brak umiejętności dostrzeżenia różnicy pomiędzy zawodnikami w trakcie rundy</div>
            </li>
            <li>i) Punktowanie rundy 10–9
              <div style="margin-left: 1em;">Gdy zawodnik nieznacznie wygrywa, notując większą liczbę efektywnych ciosów zgodnych z zasadami, technik parterowych i innych Kiedy zawodnik przewalczył rundę w gardzie i żaden z walczących nie miał przewagi w stójce ani w parterze, wygrywa rundę ten, komu udało się obalić przeciwnika w sposób zgodny z zasadami. Runda punktowana 10-9 odzwierciedla wyrównaną rywalizację z niewielką przewagą jednego z rywali</div>
            </li>
            <li>j) Punktowanie rundy 10-8
              <div style="margin-left: 1em;">Kiedy zawodnik dominuje w przeważającej części rundy zadając więcej ciosów i stosując więcej technik parterowych Kiedy zawodnik skutecznie neutralizuje ataki swojego przeciwnika nokdaunując go ciosami zgodnymi z zasadami, zagrażając próbami poddań, wyprowadzając efektywne ciosy zarówno w stójce jak i w parterze</div>
            </li>
            <li>k) Punktowanie rundy 10–7
              <div style="margin-left: 1em;">Kiedy zawodnik zupełnie dominuje rundę w stójce lub w parterze. Kiedy zawodnik absolutnie neutralizuje działania swojego przeciwnika nokdaunując go ciosami zgodnymi z zasadami, zagrażając próbami poddań, wyprowadzając efektywne ciosy zarówno w stójce jak i w parterze Punktacja 10-7 stosowana jest w rzadkich przypadkach’</div>
            </li>
          </ul>
          <h2>14. Ostrzeżenia</h2>
          <ul>
            <li>Zawodnik otrzyma pojedyncze ostrzeżenie tylko w poniższych sytuacjach:
              <ul>
                <li>• Trzymanie się lub łapanie siatki</li>
                <li>• Trzymanie przeciwnika za spodenki, rękawice, nagolenniki, rashguard</li>
                <li>• Kierowanie dłoni z wyprostowanymi palcami równolegle do maty w kierunku twarzy przeciwnika.</li>
              </ul>
            </li>
          </ul>
          <h2>15. Faule</h2>
          <ul>
            <li>a) Następujące zachowania uznaje się za faule w pojedynku mieszanych sztuk walki:
              <ul>
                <li>• Uderzanie głową</li>
                <li>• Atakowanie oczu w każdy sposób</li>
                <li>• Gryzienie</li>
                <li>• Plucie na rywala</li>
                <li>• Ciągnięcie za włosy</li>
                <li>• Wkładanie palców do buzi rywala</li>
                <li>• Wszelkiego rodzaju ataki na krocze</li>
                <li>• Wkładanie palców w otwory, otarcia lub rozcięcia rywala</li>
                <li>• Dźwignie na małe stawy</li>
                <li>• Pionowe uderzanie czubkiem łokcia (z godziny 12 na 6)</li>
                <li>• Ciosy w kręgosłup (obejmuje kość ogonową) i tył głowy</li>
                <li>• Wszelkie ataki na krtań oraz łapanie za tchawicę</li>
                <li>• Atakowanie twarzy i oczu przeciwnika wyprostowanymi palcami dłoni</li>
                <li>• Drapanie, szczypanie i skręcanie skóry</li>
                <li>• Kopanie w głowę leżącego przeciwnika</li>
                <li>• Uderzanie kolanem w głowę leżącego przeciwnika</li>
                <li>• Deptanie leżącego przeciwnika</li>
                <li>• Łapanie siatki</li>
                <li>• Łapanie spodenek lub rękawic przeciwnika</li>
                <li>• Używanie wulgarnego języka w obrębie ringu za siatką / klatki</li>
                <li>• Niesportowe zachowanie skutkujące kontuzją przeciwnika</li>
                <li>• Atakowanie przeciwnika w czasie przerwy między rundami</li>
                <li>• Atakowanie przeciwnika, który znajduje się pod opieką arbitra</li>
                <li>• Atakowanie przeciwnika po gongu obwieszczającym koniec rundy</li>
                <li>• Unikanie kontaktu z przeciwnikiem, umyślne lub powtarzające się wypluwanie szczęki,</li>
                <li>• Udawanie kontuzji</li>
                <li>• Wyrzucanie rywala poza ring / obszar walki</li>
                <li>• Umyślne niestosowanie się do instrukcji sędziego ringowego</li>
                <li>• Upuszczanie rywala na jego głowę lub kark</li>
                <li>• Ingerencja narożnika w przebieg walki</li>
                <li>• Stosowanie zabronionych substancji na włosy lub ciało, aby zyskać przewagę</li>
              </ul>
            </li>
            <li>b) Do powyższej listy należy dodać również techniki, które także powinny zostać zakazane w Amatorskim MMA:
              <ul>
                <li>• Wszelkiego rodzaju uderzenia łokciami oraz przedramieniem</li>
                <li>• Ataki na nogi (heel hook), skrętówka na kolano i stopę,</li>
                <li>• Twistery - dźwignia skrętna na kręgosłup oraz/lub każde poddanie wywołane uciskiem na kręgosłup</li>
                <li>• Podwójny Nelson</li>
                <li>• Wszystkie ciosy kolanami na głowę</li>
              </ul>
            </li>
            <li>c) Dyskwalifikacja może nastąpić po dowolnej kombinacji powyższych fauli albo po umyślnym faulu, według uznania sędziego ringowego</li>
            <li>d) Popełnienie faulu może skutkować odebraniem punktów faulującemu na oficjalnych kartach sędziów punktowych. Wszyscy sędziowie punktowi powinni zapisywać odjęte przez sędziego punkty jedynie w danej rundzie</li>
            <li>e) Tylko sędzia ringowy może ukarać zawodnika za faul. Jeśli sędzia ringowy nie ukarze zawodnika za faul, sędziom punktowym nie wolno samemu oceniać, czy doszło do faulu i nie wolno brać im takiego faulu pod uwagę przy punktowaniu rundy</li>
            <li>f) Sfaulowany zawodnik ma do 5 minut na dojście do siebie</li>
            <li>g) Kiedy dojdzie do faulu:
              <ul>
                <li>• Sędzia ringowy zarządza przerwę w walce</li>
                <li>• Sędzia ringowy wysyła zawodnika, który popełnił faul do neutralnego narożnika</li>
                <li>• Sędzia ringowy sprawdza stan i bezpieczeństwo sfaulowanego zawodnika</li>
                <li>• Sędzia ringowy ocenia faul i może upomnieć zawodnika ustnie, odejmując punkt lub nawet dwa punkty, jeśli faul jest wyjątkowo brutalny, następnie informuje zawodnika, oraz sędziów punktowych o swojej decyzji.</li>
              </ul>
            </li>
            <li>h) Jeśli zawodnik będący na dole w parterze popełni faul, a zawodnik będący u góry nie jest kontuzjowany, walka będzie kontynuowana w tej samej pozycji oraz:
              <ul>
                <li>• Sędzia ringowy ustnie poinformuje zawodnika z dołu o tym, że dopuścił się faulu</li>
                <li>• Kiedy runda się zakończy, sędzia ringowy oceni faul i w razie potrzeby odejmie punkt informując o tym zawodnika, sekundantów oraz sędziów punktowych</li>
                <li>• Sędzia ringowy może przerwać walkę z uwagi na ostrość faulu. W sytuacji rażącego faulu, zawodnik, który go popełnił zostaje zdyskwalifikowany</li>
              </ul>
            </li>
            <li>i) Jeśli zawodnik jest sfaulowany uderzeniem, które sędzia uzna za niedozwolone, sędzia ringowy powinien zatrzymać akcję i czas. Sędzia ringowy może wysłać kontuzjowanego zawodnika do lekarza ringowego, żeby ten ocenił, czy zawodnik jest zdolny do kontynuowania pojedynku. Lekarz ma do 5 minut na decyzję. Jeśli lekarze ringowy uzna, że zawodnik może kontynuować walkę, sędzia ringowy wznawia pojedynek. Inaczej niż w przypadku ciosu poniżej pasa, zawodnik nie ma 5 minut na dojście do siebie, tylko musi kontynuować pojedynek, kiedy sędzia ringowy o tym zdecyduje.</li>
            <li>j) W przypadku fauli innych niż cios poniżej pasa, jeśli kontuzjowany zawodnik zostanie uznany przez sędziego ringowego za niezdolnego do kontynuowania pojedynku, sędzia natychmiast przerywa pojedynek. Jeśli sędzia ringowy uzna, że zawodnik nie jest zdolny do kontynuowania pojedynku, nawet jeżeli nie minęło jeszcze 5 minut, zawodnikowi nie przysługuje możliwość wykorzystania pozostałego czasu, a walka musi zostać przerwana.</li>
            <li>k) Jeśli sędzia ringowy zdecyduje się zasięgnąć rady lekarza ringowego, długość trwania oceny lekarskiej nie może przekroczyć 5 minut. Jeśli przekroczy 5 minut, walka nie może być wznowiona i pojedynek zostaje przerwany.</li>
          </ul>
          <h2>16. Definicja zawodnika będącego w parterze</h2>
          <ul>
            <li>a) Zawodnik, który ma kolano na macie,</li>
            <li>b) Zawodnik, który ma jedną lub dwie stopy i co najmniej jedną całą dłoń/pięść na macie.</li>
            <li>c) Zawodnik, który leży lub siedzi na macie.</li>
          </ul>
          <h2>17. Kontuzje spowodowane dozwolonymi akcjami i faulami</h2>
          <ul>
            <li>a) Jeśli kontuzja powstała w czasie walki w wyniku dozwolonej techniki jest na tyle poważna, aby przerwać pojedynek, kontuzjowany zawodnik przegrywa przez techniczny nokaut.</li>
            <li>b) Kontuzje po faulach zamierzonych:
              <ul>
                <li>• Jeśli kontuzja powstała w czasie walki w wyniku umyślnego, według oceny sędziego ringowego, faulu jest na tyle poważna, aby przerwać pojedynek, zawodnik, który faulował przegrywa przez dyskwalifikację.</li>
                <li>• Jeśli kontuzja powstała w czasie walki w wyniku umyślnego, według oceny sędziego ringowego, faulu pozwala sfaulowanemu zawodnikowi na kontynuowanie pojedynku, sędzia ringowy informuje osobę odpowiedzialną za karty sędziowskie o odjęciu dwóch punktów na kartach zawodnika, który popełnił faul.</li>
                <li>• Jeśli kontuzja powstała w czasie walki w wyniku umyślnego, według oceny sędziego ringowego, faulu pozwala sfaulowanemu zawodnikowi na kontynuowanie pojedynku, jednak w późniejszym czasie nie pozwala mu na dalszą walkę, kontuzjowany zawodnik wygrywa przez techniczną decyzję, jeśli do tego momentu prowadził na kartach sędziowskich. Jeśli kontuzjowany zawodnik remisował lub przegrywał na kartach sędziowskich w momencie przerwania walki, walka zostaje uznana za techniczny remis.</li>
                <li>• Jeśli zawodnik dozna kontuzji próbując sfaulować rywala, sędzia ringowy nie podejmuje żadnej akcji na korzyść zawodnika, a kontuzja jest traktowana tak jakby powstała w wyniku dozwolonej akcji.</li>
              </ul>
            </li>
            <li>c) Kontuzje po faulach nieumyślnych:
              <ul>
                <li>• Jeśli kontuzja powstała w czasie walki w wyniku nieumyślnego, według oceny sędziego ringowego, faulu jest na tyle poważna, aby natychmiast przerwać pojedynek, walka zostaje uznana za no contest jeśli zostanie przerwana przed upływem dwóch rund w trzyrundowym pojedynku lub przed upływem trzech rund w pojedynku pięciorundowym.</li>
                <li>• Jeśli kontuzja powstała w czasie walki w wyniku nieumyślnego, według oceny sędziego ringowego, faulu jest na tyle poważna, aby natychmiast przerwać pojedynek, walka zostaje uznana za techniczną decyzję na korzyść zawodnika, który prowadził na kartach punktowych w momencie przerwania pojedynku, tylko wtedy, gdy przerwanie pojedynku miało miejsce po zakończeniu dwóch rund w pojedynku trzyrundowym i trzech rund w pojedynku pięciorundowym.</li>
                <li>• Nieskończone rundy w przypadku sytuacji opisanej w drugim podpunkcie punktu c) nie będą punktowane</li>
                <li>• Jeśli dojdzie do kontuzji opisanej w drugim podpunkcie punktu c), a sędzia ukarze jednego z zawodników odjęciem punktów, punkty te muszą być odjęte od końcowego wyniku.</li>
              </ul>
            </li>
          </ul>
          <h2>18. Rodzaje rezultatów</h2>
          <ul>
            <li>a) Poddanie</li>
            <li>• Fizyczne odklepanie</li>
            <li>• Poddanie werbalne</li>
            <li>b) Nokaut</li>
            <li>• Kiedy sędzia ringowy przerwie walkę (TKO)</li>
            <li>• Kiedy kontuzja spowodowana dozwoloną akcją jest na tyle poważna, że pojedynek zostaje przerwany (TKO)</li>
            <li>• Kiedy zawodnik straci przytomność po ciosie lub kopnięciu (KO)</li>
            <li>c) Decyzja</li>
            <li>• Jednogłośna decyzja – wszyscy sędziowie punktowi wypunktowali walkę dla tego samego zawodnika.</li>
            <li>• Nie jednogłośna decyzja – dwóch sędziów punktowych wypunktowało walkę dla jednego zawodnika, trzeci sędzia dla drugiego zawodnika</li>
            <li>• Większościowa decyzja – dwóch sędziów punktowych wypunktowało walkę dla jednego zawodnika, trzeci wypunktował remis</li>
            <li>d) Remis</li>
            <li>• Jednogłośny remis – wszyscy sędziowie punktowi wypunktowali remis</li>
            <li>• Większościowy remis – dwaj sędziowie punktowi wypunktowali remis</li>
            <li>• Nie jednogłośny remis – każdy sędzia punktowy wypunktował walkę inaczej</li>
            <li>e) Dyskwalifikacja</li>
            <li>• Poddanie pojedynku</li>
            <li>• Techniczny remis</li>
            <li>• Techniczna decyzja</li>
            <li>• Walka uznana zostaje za nieodbytą</li>
            <li>f) W przypadku drabinki turniejowej nie stosuje się wyników no contest oraz remisów. W takich przypadkach, gdy po 3 rundowej walce orzeczono remis, należy zarządzić czwartą rundę/dogrywkę. W przypadku remisu w czwartej rundzie/dogrywce wynikającego z odliczenia punktu jednemu z zawodników po faulu, uznaje się, że zawodnik faulujący przegrał walkę. Ta zasada odnosi się jedynie do czwartej rundy/dogrywki.</li>
          </ul>
        </li>
      </ol>

      <h2>Regulamin dodatkowy</h2>
      <h3>1. Badania medyczne przed turniejem</h3>
      <ul>
        <li>a) Zawodnicy przed turniejem musza spełniać wymagania odnośnie badań medycznych zgodnie z poniższymi przepisami:
          <ul>
            <li>• Rozporządzenie ministra zdrowia z 27 lutego 2019 roku zmieniające rozporządzenie w sprawie świadczeń gwarantowanych z zakresu ambulatoryjnej opieki specjalistycznej zostało opublikowane w Dzienniku Ustaw RP 28 lutego 2019 roku (pozycja 397).</li>
            <li>• Rozporządzenie ministra zdrowia z 27 lutego 2019 roku w sprawie trybu orzekania o zdolności do uprawiania danego sportu przez dzieci i młodzież do ukończenia 21. roku życia oraz zawodników pomiędzy 21. a 23. rokiem życia zostało opublikowane w Dzienniku Ustaw RP 28 lutego 2019 roku (pozycja 396).</li>
            <li>• Rozporządzenie ministra zdrowia z 27 lutego 2019 roku zmieniające rozporządzenie w sprawie kwalifikacji lekarzy uprawnionych do wydawania zawodnikom orzeczeń lekarskich o stanie zdrowia oraz zakresu i częstotliwości wymaganych badań lekarskich niezbędnych do uzyskania tych orzeczeń zostało opublikowane w Dzienniku Ustaw RP 28 lutego 2019 roku (pozycja 395).</li>
            <li>• By móc wziąć udział w turnieju wszyscy zawodnicy muszą dodatkowo przejść przez testy medyczne przeprowadzane na miejscu przez lekarza zawodów (ogólne badanie lekarskie).</li>
            <li>• Zawodnicy muszą dostarczyć wydrukowane wyniki badań na Żółtaczkę typu B (Hepatitis B, HBsAg), Żółtaczkę typu C (Hepatitis C, HCV Ab) oraz na HIV (p24 1&2 antyciała COMBO). Wyniki badań nie mogą być starsze niż 6 miesięcy od dnia zawodów.</li>
            <li>• Badanie od lekarza medycyny sportowej, lekarza rodzinnego lub innego lekarza posiadającego uprawnienia medycyny sportowej ABC potwierdzające brak przeciwwskazań do uprawiania MMA zgodnie z obowiązującymi przepisami.</li>
            <li>• Oryginały wykonanych badań należy mieć ze sobą w dniu zawodów, podczas weryfikacji zawodników w formie wydruków.</li>
            <li>• W przypadku stwierdzenia faktu podrabiania wyników medycznych, zawodnik jest automatycznie dyskwalifikowany z udziału w zawodach, a Organizator po ich zakończeniu podejmie i przekaże zawodnikowi decyzje odnośnie zawieszenia w startach zawodnika na organizowanych przez siebie zawodach.</li>
            <li>• Wszystkie badania muszą być wykonane w języku polskim lub angielskim</li>
          </ul>
        </li>
        <li>b) Badania po walce
          <ul>
            <li>• Niezwłocznie po walce każdy zawodnik przechodzi badanie lekarskie przez lekarza zatwierdzonego przez Organizatora. Badanie lekarskie może obejmować wszelkie badania lub testy, które Organizator uzna za niezbędne do ustalenia sprawności fizycznej zawodnika po walce.</li>
            <li>• Każdy uczestnik, który odmówi poddania się badaniom medycznym po walce, zostanie natychmiast zawieszony na czas nieokreślony na czas przeprowadzenia dochodzenia</li>
          </ul>
        </li>
      </ul>
      <h3>2. Klatka/Miejsce walki</h3>
      <ul>
        <li>a) Rozmiar: <div style="margin-left: 10px;">Obszar ringu klatki / miejsca walki musi być okrągły lub mieć co najmniej osiem równych boków i nie może być mniejszy niż 20 stóp x 20 stóp i nie większy niż 32 stopy x 32 stopy. Powierzchnia klatki / miejsca walki powinna być wyściełana w sposób zatwierdzony przez komisję, z co najmniej 1 calową warstwą podbicia z pianki. Podbicie powinno rozciągać się poza obszar klatki / miejsca walki i poza krawędź platformy. Obszar klatki / miejsca walki powinien mieć ochronną matę. Nie dopuszcza się żadnych winylowych ani innych plastikowych pokryć gumowych, ani materiałów, które mają tendencję do gromadzenia się w grudkach lub przy krawędziach.</div></li>
        <li>b) Siatka: <div style="margin-left: 10px;">Mata klatki/ miejsca walki powinna być ogrodzona siatką z takiego materiału, który nie pozwoli zawodnikowi wypaść lub przedrzeć się na podłogę lub na widzów; w tym, bez ograniczeń, ogrodzenie z ogniw łańcucha pokryte winylem. Każda metalowa część ogrodzonego obszaru musi być przykryta i wyściełana w sposób zatwierdzony przez komisję i nie może stanowić zagrożenia dla zawodników.
          <ul>
            <li>• Ogrodzony obszar musi mieć dwa wejścia, najlepiej po przeciwnych stronach ogrodzonego obszaru.</li>
            <li>• Na siatce ogradzającej obszar, w którym walczą zawodnicy nie ma prawa znajdować się żadna przeszkoda.</li>
          </ul>
          </p>
        </li>
        <li>c) Stołek ringowy typu zatwierdzonego przez Organizatora jest dostępny dla każdego zawodnika. Wszystkie stołki ringowe muszą być dokładnie oczyszczone lub wymienione po każdej walce.
          <ul>
            <li>• Odpowiednia liczba stołków lub krzeseł, typu zatwierdzonego przez Organizatora, będzie dostępna dla sekundantów każdego zawodnika w cornerze. Po każdej walce stołki muszą być dokładnie oczyszczone lub wymienione.</li>
          </ul>
        </li>
        <li>d) Do każdego pojedynku, Organizator walki powinien zapewnić cornerowi zawodnika:
          <ul>
            <li>• Czyste wiadro na wodę;</li>
            <li>• Czystą plastikową butelkę.</li>
          </ul>
        </li>
      </ul>
      <h3>3. Zachowanie sekundantów</h3>
      <ul>
        <li>a) Każdy klub wystawiający zawodników do udziału w turnieju, otrzymuje zgodnie z ilością zgłoszeń z jednego klubu, odpowiednią liczbę miejsc dla członków teamu (trener, sekundant):
        <ol>
          <li>• Do 5 zawodników – 2 osoby w teamie</li>
          <li>• Od 6 do 10 zawodników – 3 osoby w teamie</li>
          <li>• Od 11 – 4 osoby w teamie</li>
        </ol>
        <li>b) W narożniku zawodnika może przebywać maksymalnie dwóch sekundantów. Jeżeli przydział sekundantów na klub jest większy, nadal do narożnika jednego zawodnika może wyjść maksymalnie 2 sekundantów.</li>
        <li>c) Zawodnik ma prawo do korzystania z pomocy sekundantów w czasie walki, podczas przygotowania do walki oraz bezpośrednio po jej zakończeniu</li>
        <li>d) W czasie przerwy między rundami do klatki może wejść tylko dwóch sekundantów. W sytuacji, gdy cutman Organizatora wchodzi do narożnika, tylko jedna osoba może wejść do klatki (drugi sekundant musi pozostać na zewnątrz)</li>
        <li>e) Obowiązkiem sekundantów jest dostarczenie dla swojego zawodnika suspensorium oraz ochraniacz na szczękę</li>
        <li>f) W czasie trwania walki (rundy) sekundanci muszą przebywać poza podestem klatki na wyznaczonych miejscach</li>
        <li>g) Obowiązkiem sekundantów jest uprzątnięcie narożnika po przerwie między rundami</li>
        <li>h) W czasie trwania walki (rundy) sekundantom nie wolno:
          <ul>
            <li>• wchodzić na podest klatki</li>
            <li>• przechodzić przez liny siatki</li>
            <li>• łapać i szarpać liny, (siatkę)</li>
            <li>• poruszać się wkoło klatki</li>
            <li>• używać niecenzuralnych słów pod adresem zawodnika lub sędziego</li>
            <li>• korzystać z pomocy osób trzecich (nieuprawnionych)</li>
            <li>• pomagać fizycznie zawodnikowi bez zezwolenia sędziego</li>
          </ul>
        </li>
        <li>i) W czasie trwania przerwy w walce sekundantom nie wolno:</li>
          <ul>
            <li>• przebywać wewnątrz klatki w liczbie większej niż dwie osoby.</li>
            <li>• zwracać się bezpośrednio do sędziego ringowego</li>
            <li>• przechodzić do narożnika przeciwnej ekipy</li>
            <li>• podawać zawodnikowi wspomagania w postaci stałej (tabletki, pastylki itp.)</li>
            <li>• podawać wodę (płyny) w opakowaniu szklanym</li>
            <li>• zaszywać i zlepiać rany powstałe w wyniku walki</li>
          </ul>
        </li>
        <li>j) W czasie walki (rundy) sekundantom wolno:
          <ul>
            <li>• udzielać wskazówek zawodnikowi dotyczącej przebiegu walki spoza klatki</li>
            <li>• przygotować sprzęt do pomocy podczas przerwy (woda, lód itp.)</li>
          </ul>
        </li>
        <li>k) Za nieprzestrzeganie zasad sekundanci mogą być ukarani ostrzeżeniem oraz dyskwalifikacją oraz mogą spowodować ostrzeżenie oraz dyskwalifikację ich zawodnika
          <ul>
            <li>• pierwsze ostrzeżenie udzielane jest po pierwszym złamaniu zasad zachowania sekundantów</li>
            <li>• trzecie ostrzeżenie oznacza odesłanie sekundanta do szatni,</li>
            <li>• kolejne ostrzeżenie oznacza dyskwalifikację zawodnika</li>
            <li>• dyskwalifikacja może nastąpić od razu, gdy złamanie reguł zachowania sekundantów</li>
            <li>• bezpośrednio wpłynęło na przebieg walki niekorzystny dla przeciwnika</li>
          </ul>
        </li>
      </ul>
      <h3>4. Odwołania</h3>
      <ul>
        <li>Komisja odwoławcza w składzie 
        <ul>
          <li>• sędzia główny</li>
          <li>• sędzia ringowy</li>
          <li>• jeden z sędziów punktowych</li>
        </ul>
        rozpatruje złożony protest, a jego wynik prezentuje w ciągu 48 godzin od daty przyjęcia protestu</li>
      </ul>
      <h3>5. Zabezpieczenie medyczne</h3>
      <ul>
        <li>Podczas zawodów, organizator zapewnia opiekę medyczną lekarza i zespołów ratownictwa medycznego, przez cały okres trwania zawodów - zakres opieki to pomoc doraźna na miejscu zawodów. Organizator nie bierze odpowiedzialności za urazy które powstały przed i po imprezie, oraz za obrażenia powstałe poza wyznaczonym miejscem organizowanych zawodów. Zabezpieczenie medyczne działa na podstawie: "Rozporządzenie Ministra Zdrowia z dnia 6 lutego 2012 r. w sprawie minimalnych wymagań dotyczących zabezpieczenia pod względem medycznym imprezy masowej."</li>
      </ul>
      <h3>6. Informacje dodatkowe</h3>
      <ul>
        <li>a) Organizator w trakcie trwania turnieju nie odpowiada za rzeczy należące do teamu zawodnika i samego zawodnika pozostawione na terenie obiektu, w którym odbywa się turniej</li>
        <li>b) Zawodnik biorący udział w turnieju musi posiadać ze sobą dokument tożsamości (w wypadku zawodników niepełnoletnich, wymagana jest zgoda rodziców oraz inny dokument potwierdzający tożsamość zawodnika)</li>
        <li>c) Zawodnik biorący udział w turnieju jest wywoływany do stawienia się w klatce przez przedstawiciela Organizatora. Niestawienie się w klatce w ciągu 2 minut od pierwszego wywołania skutkuje dyskwalifikacją zawodnika. W uzasadnionych przypadkach (np. dodatkowa konsultacja medyczna) i po informacji uzyskanej od samego zawodnika lub jego narożnika, Organizator może podjąć decyzję o dodatkowym czasie dla danego zawodnika na stawienie się w klatce.</li>
        <li>d) Zawodnik biorący udział w turnieju zobowiązany jest do przedstawienia dodatkowego ubezpieczenia NNW na dzień zawodów, obejmującego MMA. Jeżeli zawodnik nie ma możliwości znalezienia ubezpieczenia obejmującego MMA, należy wykupić ubezpieczenie NNW od uderzanych sportów walki, takich jak: Boks, Kickboxing, Muay Thai, K1 lub inne. Jeżeli zawodnik objęty jest klubowym ubezpieczeniem NNW – polisa musi zawierać stronę z wyszczególnionymi danymi zawodnika lub dodatkową stronę z pieczątką agenta ubezpieczeniowego z wyszczególnieniem nazwisk, jakie obejmuje polisa. Polisa musi być wystawiona w języku polskim lub fo polisy należy dołączyć tłumaczenie przysięgłe na język polski.</li>
      </ul>

    </div>
  </div>


  <?php
    require("footer.php");
  ?>

</body>
</html>
