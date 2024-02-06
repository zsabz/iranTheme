import { Footer } from './components/Footer';
import * as index from './components/index';
export default function  Main({products}){
    return (
        <>
        {console.log(products.data)}
        <index.Header/>

            <main className='main'>
                <div className="page-content">
                    <div className="container">
                        <div className="row">
                            <index.Sidbar></index.Sidbar>

                            <div className="col-lg-9">
                                <div className="products mb-3">
                                    <div className="row justify-content-centeR">

                                            {products.data?.map(
                                                function(product,index) {
                                                    return(
                                                        <footer key={index*3}>
                                                            12
                                                            {/* <index.SingleProduct key={index}/> */}
                                                        </footer>
                                                    )

                                                }
                                            )}
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </main>
            {console.log(products)}

          <Footer/>
        </>
    )
}