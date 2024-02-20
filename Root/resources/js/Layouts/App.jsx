import { Header } from "./Header";
import { Footer } from "./Footer";
import { Link } from "@inertiajs/react";

const Main = (props) => {
    return (
        <>
            <body>
                <div className='search-index_content__root'>
                    <Link href='tesjt'>hjgh</Link>
                    <Header />
                    {props.children}
                    <Footer />
                </div>
            </body>
        </>
    )
}

export default Main;