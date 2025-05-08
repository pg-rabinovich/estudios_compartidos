import React from "react";
import Layout from "../Layouts/Layout";
import { Link } from "@inertiajs/react";

function Base({ posts }) {
    console.log(posts);
    return (
        <>
            <h1 class="p-8">Estudios_compartidos </h1>
            <br />
            <br />

            <div>
                {posts.data.map((post) => (
                    <div key={post.id} className="p-4 border-b">
                        <div className="text-sm text-slate-600">
                            <span> Publicado el: </span>
                            <span>
                                {new Date(post.created_at).toLocaleTimeString()}
                            </span>
                        </div>
                        <p className="font-medium">{post.body}</p>
                    </div>
                ))}
            </div>

            <div className="py-12 px-4">
                {posts.links.map((link) =>
                    link.url ? (
                        <Link
                            key={link.label}
                            href={link.url}
                            dangerouslySetInnerHTML={{ __html: link.label }}
                            className={`p-1 mx-1 ${
                                link.active ? "text-blue-500 font-bold" : ""
                            }`}
                        />
                    ) : (
                        <span
                            key={link.label}
                            dangerouslySetInnerHTML={{ __html: link.label }}
                            className="p-1 mx-1 text-slate-300"
                        ></span>
                    )
                )}
            </div>

            {/* 
            //ejemplo de link con data time */}
            <Link
                preserveScroll
                href="/"
                className="block text-4xl font-bold text-center  mt-[1000px]"
            >
                {" "}
                {new Date().toLocaleTimeString()}
            </Link>
        </>
    );
}

/* Base.layout = (page) => <Layout children={page} />; */

//asi, aqui antes del export llamamos al layout en un componente, pero lo haremos por default
//en el archivo app.jsx. Ahi le diremos, usa el layout por default pero si coloco otro layout
//en mi componente , usa ese.

//preserveScroll--> funcion de inertia para que al cliquear sobre algo (en este caso la hora)
//que esta en scroll hacia abajo, no se vaya todo hacia arriba...se puede hacer con un boton tmb.

export default Base;
