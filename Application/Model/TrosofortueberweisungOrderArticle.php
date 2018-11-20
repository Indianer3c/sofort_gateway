<?php

namespace Tronet\Trosofortueberweisung\Application\Model;

use OxidEsales\Eshop\Application\Model\OrderArticle;

/**
 * @link          http://www.tro.net
 * @copyright (c) tronet GmbH 2018
 * @author        tronet GmbH
 *
 * @since         8.0.2
 * @version       8.0.6
 */
class TrosofortueberweisungOrderArticle extends TrosofortueberweisungOrderArticle_parent 
{
    // Klasse wird im Modul nicht mehr ben�tigt, allerdings gibt es einen Bug im Oxid.
    // Wird das Modul beim Updaten nicht gel�scht und danach die Tabelle oxconfig bereinigt,
    // wird die Klasse weiterhin �berladen, auch wenn sie aus der metadata.php entfernt wurde.
    // Auch Modul Deaktivieren/Aktivieren f�hrt zu keinem Ergebnis.
    // Erst wenn man die Datei manuell l�scht und dann im Backend best�tigt,
    // dass eine ung�ltige Datei aus der Tabelle oxconfig entfernt wird,
    // wird diese nicht mehr �berladen.
    // Um Probleme zu vermeiden mit Shop-Betreibern, die einfach nur die neuen Modul-Dateien hochladen,
    // wird diese leere Datei zur Verf�gung gestellt.
}
