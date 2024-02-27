# Kas ir api?
### Lietojumprogrammas saskarne ir iepriekš definētu klašu, procedūru, funkciju, struktūru un konstanšu kopums, kas tiek pasniegts kā pielikums (bibliotēkas, servisi), kuru iespējams izmantot ārējiem programmatūras produktiem.

# Kā deklarēt mainīgo PHP valodā?
### izmantojot $, piemēram: $mainigais = 3.14

# Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā.
### MVC model-view-controller arhitektūru - sakārto lietojumprogrammas loģiku atsevišķos slāņos, no kuriem katrs veic noteiktu uzdevumu kopu.

# Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
### ORM (Object Relational Mapping) ir programmēšanas tehnika, kas ļauj izstrādātājiem mijiedarboties ar datu bāzi, izmantojot objektorientētas programmēšanas koncepcijas, nerakstot tīrus SQL vaicājumus. To izmanto, jo tas var būt efektīvāk, vieglāk pārskatāms, uzturams, paplašināms un drošāks, ja izmanto pareizi.

# Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4.
### return response() -> json(User::where('rating', '>', '4'))->get;

