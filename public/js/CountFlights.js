

	const COUNTFLIGHTS_API_URL = "https://taxixi.com/api/v1/guests/total-services?token=$2y$10Pg6OSukbhpZnRPzMjn1z4KT4hByuUVubje1v9xkt";



	class CountFlights
	{
		static _URLPARAMS      = null;
		static _SCRIPTELEMENT = null;

		static getFakeCount( ) 
		{
			let FAKECOUNT =  CountFlights._URLPARAMS.searchParams.get( "add-fake" ) ?? 0;

			if( FAKECOUNT != 0 && typeof FAKECOUNT == "string" ) 
			{
				FAKECOUNT = FAKECOUNT.replaceAll( "_" , "" );
				FAKECOUNT = parseInt( FAKECOUNT );
			}

			return FAKECOUNT;
		}

		static async getTotal( ) 
		{
			return new Promise( ( resolve ) => 
			{
				fetch( COUNTFLIGHTS_API_URL )
				.then( e => e.json() )
				.then( json => 
				{
					resolve( json.total + CountFlights.getFakeCount( ) ); 
				});
			});

			
		}

		static setScriptElement( scriptElement ) 
		{
			CountFlights._URLPARAMS = new URL(scriptElement.src);
			CountFlights._SCRIPTELEMENT = scriptElement;
		}

		static async onInit(  ) 
		{
			CountFlights._executeOnReady( );
		}

		static async _executeOnReady( ) 
		{
			const JS = CountFlights._SCRIPTELEMENT.getAttribute( "onready" );	

			if( JS ) 
			{
				const value = await CountFlights.getTotal( );
				      eval( JS );
			}
		}

	}


	
	const currentScript = document.currentScript;

	window.addEventListener( "load" , ( ) => {
		CountFlights.setScriptElement( currentScript );
		CountFlights.onInit( ); 
	});




