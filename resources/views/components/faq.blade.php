<x-app-layout>
<div>

    <div class="container mx-auto my-8 p-8 bg-white rounded shadow-lg">
        <h1 class="text-3xl font-bold mb-6">Întrebări Frecvente</h1>

        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
            Ce produse oferiți pe site-ul vostru?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">
                    7AM MakeYourDay oferă o gamă diversă de produse, inclusiv [enumerare produse sau categorii principale]. Puteți explora întreaga selecție pe site-ul nostru.</p>
            </div>
        </div>

        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
                Cum pot plasa o comandă?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">Plasarea unei comenzi este simplă. Trebuie doar să navigați pe site, să adăugați produsele dorite în coșul de cumpărături și să urmați instrucțiunile de checkout. Vă rugăm să vă asigurați că furnizați informațiile corecte de livrare și să verificați coșul înainte de finalizarea comenzii.</p>
            </div>
        </div>
        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
                Care sunt opțiunile de plată disponibile?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">Acceptăm plăți online prin [enumerați metodele de plată disponibile, cum ar fi cardul de credit, PayPal etc.]. Asigurați-vă că toate tranzacțiile sunt securizate și că informațiile dvs. sunt protejate.</p>
            </div>
        </div>
        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
                Care sunt costurile de livrare?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">Costurile de livrare variază în funcție de locația dvs. și de opțiunile de livrare selectate. Puteți verifica costurile de livrare înainte de finalizarea comenzii în coșul de cumpărături.</p>
            </div>
        </div>
        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
                Care este politica de returnare a produselor?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">Detalii complete despre politica noastră de returnare sunt disponibile pe pagina dedicată [Link către pagina de returnare]. În esență, acceptăm returnări în anumite condiții, iar clienții sunt rugați să consulte această pagină pentru mai multe informații..</p>
            </div>
        </div>
        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
                Cum pot urmări stadiul comenzii mele?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">Odată ce comanda dvs. a fost procesată și expediată, veți primi un e-mail cu detaliile de urmărire și un link pentru a monitoriza livrarea comenzii dvs.</p>
            </div>
        </div>
        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
                Cum pot contacta serviciul clienți?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">Suntem aici pentru a vă ajuta! Puteți să ne contactați prin mail sau printr-un telefon pe care le gasiti disponibile pe <a class="underline" href="{{  url('') }}/contact">pagina noastră de contact.</a></p>
            </div>
        </div>
        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
                Cât timp durează livrarea comenzii mele?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">Timpul de livrare depinde de locația dvs. și de opțiunile de livrare selectate. Puteți verifica estimările de livrare înainte de finalizarea comenzii.</p>
            </div>
        </div>
        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
            Cum pot primi oferte și promoții speciale?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">Pentru a fi la curent cu ofertele și promoțiile noastre, vă recomandăm să vă abonați la buletinul nostru informativ. Veți primi actualizări periodice cu privire la reduceri și evenimente speciale.</p>
            </div>
        </div>
        <div class="mb-4">
            <button class="font-semibold w-full text-left p-4 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition">
            Ce fac dacă întâmpin probleme cu produsul primit?
            </button>
            <div class="hidden mt-2">
                <p class="text-gray-700">În cazul în care întâmpinați probleme cu produsul primit, vă rugăm să ne contactați imediat prin [metoda de contact] și vom depune toate eforturile pentru a rezolva situația în cel mai scurt timp posibil.</p>
            </div>
        </div>


    </div>

    <script>
        const faqButtons = document.querySelectorAll('.mb-4 button');
        faqButtons.forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                answer.classList.toggle('hidden');
            });
        });
    </script>

    </div>
</x-app-layout>