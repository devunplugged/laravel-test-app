import { Head, Link } from '@inertiajs/react';

export default function Welcome({ auth, laravelVersion, phpVersion }) {

    return (
        <>
            <Head title="Test" />
            <div>Testowy widok react</div>
            <p>PHP: {phpVersion}</p>
        </>
    );
}
