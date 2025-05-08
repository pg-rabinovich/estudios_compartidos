import { Link } from "@inertiajs/react";
import React from "react";
function Layout({ children }) {
    return (
        <>
            <header>
                <nav>
                    <div class="nav-links">
                        <Link className="nav-link" href="/">
                            Base
                        </Link>
                        <Link className="nav-link" href="/listarUsuarios">
                            Listar
                        </Link>
                    </div>
                </nav>
            </header>

            <main className="container mx-auto p-6">{children}</main>
        </>
    );
}

export default Layout;
