<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de projet web</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea, button {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Formulaire de projet web</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $email = $_POST['email'];
        $organisation = $_POST['organisation'];
        $website = $_POST['website'];
        $objectif_principal = $_POST['objectif_principal'];
        $objectifs_secondaires = $_POST['objectifs_secondaires'];
        $public_cible = $_POST['public_cible'];
        $attentes = $_POST['attentes'];
        $contenu = $_POST['contenu'];
        $aide_contenu = $_POST['aide_contenu'];
        $design_preferences = $_POST['design_preferences'];
        $exemples_sites = $_POST['exemples_sites'];
        $fonctionnalites = $_POST['fonctionnalites'];
        $design_elements = $_POST['design_elements'];
        $integrations = $_POST['integrations'];
        $pages_principales = $_POST['pages_principales'];
        $sitemap = $_POST['sitemap'];
        $seo = $_POST['seo'];
        $keywords = $_POST['keywords'];
        $digital_marketing = $_POST['digital_marketing'];
        $budget = $_POST['budget'];
        $delai = $_POST['delai'];
        $support_maintenance = $_POST['support_maintenance'];
        $maj_contenu = $_POST['maj_contenu'];
        $contraintes_techniques = $_POST['contraintes_techniques'];
        $autres_exigences = $_POST['autres_exigences'];

        // Adresse e-mail où les réponses seront envoyées
        $to = "votre.email@example.com";  // Remplacez par votre adresse e-mail
        $subject = "Nouvelle soumission de formulaire";

        // Corps de l'e-mail
        $message = "
        <html>
        <head>
            <title>Nouvelle soumission de formulaire</title>
        </head>
        <body>
            <h2>Détails du projet :</h2>
            <p><strong>Adresse e-mail :</strong> $email</p>
            <p><strong>Nom de l'entreprise :</strong> $organisation</p>
            <p><strong>Site web actuel :</strong> $website</p>
            <p><strong>Objectif principal :</strong> $objectif_principal</p>
            <p><strong>Objectifs secondaires :</strong> $objectifs_secondaires</p>
            <p><strong>Public cible :</strong> $public_cible</p>
            <p><strong>Attentes :</strong> $attentes</p>
            <p><strong>Contenu :</strong> $contenu</p>
            <p><strong>Aide pour la création de contenu :</strong> $aide_contenu</p>
            <p><strong>Préférences de design :</strong> $design_preferences</p>
            <p><strong>Exemples de sites :</strong> $exemples_sites</p>
            <p><strong>Fonctionnalités spécifiques :</strong> $fonctionnalites</p>
            <p><strong>Éléments de design :</strong> $design_elements</p>
            <p><strong>Intégrations nécessaires :</strong> $integrations</p>
            <p><strong>Pages principales :</strong> $pages_principales</p>
            <p><strong>Sitemap :</strong> $sitemap</p>
            <p><strong>Optimisation SEO :</strong> $seo</p>
            <p><strong>Mots-clés :</strong> $keywords</p>
            <p><strong>Marketing numérique :</strong> $digital_marketing</p>
            <p><strong>Budget :</strong> $budget</p>
            <p><strong>Délai :</strong> $delai</p>
            <p><strong>Support de maintenance :</strong> $support_maintenance</p>
            <p><strong>Mise à jour du contenu :</strong> $maj_contenu</p>
            <p><strong>Contraintes techniques :</strong> $contraintes_techniques</p>
            <p><strong>Autres exigences :</strong> $autres_exigences</p>
        </body>
        </html>
        ";

        // Pour envoyer l'e-mail en HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Headers supplémentaires
        $headers .= 'From: <webmaster@example.com>' . "\r\n";  // Remplacez par une adresse e-mail valide

        // Envoyer l'e-mail
        if (mail($to, $subject, $message, $headers)) {
            echo "<p style='color: green; text-align: center;'>Merci, votre formulaire a été soumis avec succès !</p>";
        } else {
            echo "<p style='color: red; text-align: center;'>Une erreur s'est produite lors de l'envoi du formulaire. Veuillez réessayer.</p>";
        }
    }
    ?>

    <form action="" method="POST">
        <label for="email">Adresse e-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="organisation">Nom de votre entreprise ou organisation</label>
        <input type="text" id="organisation" name="organisation" required>

        <label for="website">Adresse de votre site web actuel (si applicable)</label>
        <input type="url" id="website" name="website">

        <label for="objectif_principal">Quel est l'objectif principal de votre site web ?</label>
        <textarea id="objectif_principal" name="objectif_principal" required></textarea>

        <label for="objectifs_secondaires">Quels sont les objectifs secondaires ?</label>
        <textarea id="objectifs_secondaires" name="objectifs_secondaires"></textarea>

        <label for="public_cible">Décrivez votre public cible (âge, sexe, intérêts, etc.)</label>
        <textarea id="public_cible" name="public_cible" required></textarea>

        <label for="attentes">Quelles sont leurs attentes en visitant votre site web ?</label>
        <textarea id="attentes" name="attentes" required></textarea>

        <label for="contenu">Avez-vous déjà le contenu (textes, images, vidéos) pour le site ?</label>
        <textarea id="contenu" name="contenu"></textarea>

        <label for="aide_contenu">Souhaitez-vous de l'aide pour la création de contenu ?</label>
        <textarea id="aide_contenu" name="aide_contenu"></textarea>

        <label for="design_preferences">Avez-vous des préférences en termes de design ?</label>
        <textarea id="design_preferences" name="design_preferences"></textarea>

        <label for="exemples_sites">Avez-vous des exemples de sites que vous aimez ? (veuillez fournir les URLs)</label>
        <textarea id="exemples_sites" name="exemples_sites"></textarea>

        <label for="fonctionnalites">Quelles fonctionnalités spécifiques voulez-vous sur votre site ?</label>
        <textarea id="fonctionnalites" name="fonctionnalites"></textarea>

        <label for="design_elements">Y a-t-il des éléments spécifiques que vous souhaitez inclure dans le design ?</label>
        <textarea id="design_elements" name="design_elements"></textarea>

        <label for="integrations">Y a-t-il des intégrations nécessaires ? (paiement en ligne, réseaux sociaux, etc.)</label>
        <textarea id="integrations" name="integrations"></textarea>

        <label for="pages_principales">Quelles pages principales voulez-vous avoir sur votre site ?</label>
        <textarea id="pages_principales" name="pages_principales"></textarea>

        <label for="sitemap">Avez-vous une structure ou un sitemap en tête ?</label>
        <textarea id="sitemap" name="sitemap"></textarea>

        <label for="seo">Souhaitez-vous optimiser votre site pour les moteurs de recherche (SEO) ?</label>
        <textarea id="seo" name="seo"></textarea>

        <label for="keywords">Avez-vous des mots-clés spécifiques sur lesquels vous souhaitez vous concentrer ?</label>
        <textarea id="keywords" name="keywords"></textarea>

        <label for="digital_marketing">Avez-vous besoin d'aide pour le marketing numérique ? (référencement payant, publicité, réseaux sociaux)</label>
        <textarea id="digital_marketing" name="digital_marketing"></textarea>

        <label for="budget">Quel est votre budget pour ce projet ?</label>
        <textarea id="budget" name="budget" required></textarea>

        <label for="delai">Quel est votre délai pour la réalisation du site ?</label>
        <textarea id="delai" name="delai" required></textarea>

        <label for="support_maintenance">Avez-vous besoin d'un support continu pour la maintenance du site ?</label>
        <textarea id="support_maintenance" name="support_maintenance"></textarea>

        <label for="maj_contenu">Souhaitez-vous pouvoir mettre à jour le contenu vous-même ou préférez-vous que nous nous en occupions ?</label>
        <textarea id="maj_contenu" name="maj_contenu"></textarea>

        <label for="contraintes_techniques">Y a-t-il des contraintes techniques ou des considérations particulières dont nous devrions être conscients ?</label>
        <textarea id="contraintes_techniques" name="contraintes_techniques"></textarea>

        <label for="autres_exigences">Avez-vous d'autres attentes ou exigences spécifiques pour ce projet ?</label>
        <textarea id="autres_exigences" name="autres_exigences"></textarea>

        <button type="submit">Envoyer</button>
    </form>
</div>

</body>
</html>
