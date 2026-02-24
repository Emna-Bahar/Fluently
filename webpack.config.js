const Encore = require('@symfony/webpack-encore');

// Configuration automatique de l'environnement runtime
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // Dossier de sortie des assets compilés
    .setOutputPath('public/build/')
    // Chemin public utilisé par le navigateur
    .setPublicPath('/build')

    // Entrée principale : app.js (où tu importes tes controllers Stimulus)
    .addEntry('app', './assets/app.js')

    // Active Stimulus + le bridge Symfony (obligatoire pour tes controllers)
    .enableStimulusBridge('./assets/controllers.json')

    // Split les chunks pour optimisation (recommandé)
    .splitEntryChunks()

    // Runtime chunk séparé (recommandé sauf SPA)
    .enableSingleRuntimeChunk()

    // Nettoie le dossier build avant chaque compilation
    .cleanupOutputBeforeBuild()

    // Source maps en dev uniquement
    .enableSourceMaps(!Encore.isProduction())

    // Versioning (hash dans les noms de fichiers) en production uniquement
    .enableVersioning(Encore.isProduction())

    // Polyfills Babel (corejs 3.38 est très bien pour 2026)
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.38';
    })

    // Active les notifications de build (optionnel mais utile)
    // .enableBuildNotifications()

    // Si tu utilises TypeScript un jour
    // .enableTypeScriptLoader()

    // Si tu utilises Sass/SCSS
    // .enableSassLoader()
;

// Export final
module.exports = Encore.getWebpackConfig();