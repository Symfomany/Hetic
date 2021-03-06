<?php

/**
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@license FreeBSD License (http://opensource.org/licenses/BSD-2-Clause)
 */

namespace fg\Essence\Provider\OEmbed;

use fg\Essence\Exception;
use fg\Essence\Cache\Volatile;
use fg\Essence\Provider\OEmbed;
use fg\Essence\Utility\Registry;



/**
 *	Generic OEmbed provider.
 *
 *	@package fg.Essence.Provider.OEmbed
 */

class Generic extends OEmbed {

	/**
	 *	{@inheritDoc}
	 */

	protected $_generic = true;



	/**
	 *	A cache for extracted endpoints.
	 *
	 *	@var fg\Essence\Cache\Volatile
	 */

	protected $_Cache = null;



	/**
	 *	{@inheritDoc}
	 */

	public function __construct( array $options = array( )) {

		parent::__construct( $options );

		$this->_Cache = new Volatile( );
	}



	/**
	 *	{@inheritDoc}
	 */

	public function canEmbed( $url ) {

		return ( $this->_extractEndpoint( $url ) !== false );
	}



	/**
	 *	{@inheritDoc}
	 */

	protected function _embed( $url, $options ) {

		$endpoint = $this->_extractEndpoint( $url );

		if ( !$endpoint ) {
			throw new Exception( 'Unable to find any endpoint.' );
		}

		return $this->_embedEndpoint(
			$endpoint['url'],
			$endpoint['type'],
			$options
		);
	}



	/**
	 *	Extracts an oEmbed endpoint from the given URL.
	 *
	 *	@param string $url
	 */

	protected function _extractEndpoint( $url ) {

		if ( $this->_Cache->has( $url )) {
			return $this->_Cache->get( $url );
		}

		$attributes = Registry::get( 'dom' )->extractAttributes(
			Registry::get( 'http' )->get( $url ),
			array(
				'link' => array(
					'rel' => '#alternate#i',
					'type',
					'href'
				)
			)
		);

		$endpoint = false;

		foreach ( $attributes['link'] as $link ) {
			if ( preg_match( '#json|xml#i', $link['type'], $matches )) {
				$endpoint = array(
					'url' => $link['href'],
					'type' => array_shift( $matches )
				);

				break;
			}
		}

		$this->_Cache->set( $url, $endpoint );
		return $endpoint;
	}
}
