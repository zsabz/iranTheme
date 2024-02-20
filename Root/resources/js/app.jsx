import { createRoot } from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

import Main from './Layouts/App';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';


function setPageLayeout(module) {
    if (!module.default.layout) {
        module.default.layout = (p) => <Main children={p}></Main>
    }
}


createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        // const page = resolvePageComponent(`./Pages/${name}.jsx`, import.meta.glob('./Pages/**/*.jsx'))
        const page = resolvePageComponent(`./Pages/${name}.jsx`, import.meta.glob('./Pages/**/*.jsx'))
        page.then((module) => {setPageLayeout(module)
        console.log(module)
        }
        )
        return (page)
    },
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render(<App {...props} />);
    },
    progress: {
        color: '#FF5555',
    },
});
