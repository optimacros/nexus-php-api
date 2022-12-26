# ReadLdapServerXo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | LDAP server name | 
**protocol** | **string** | LDAP server connection Protocol to use | 
**useTrustStore** | **bool** | Whether to use certificates stored in Nexus Repository Manager&#39;s truststore | [optional] 
**host** | **string** | LDAP server connection hostname | 
**port** | **int** | LDAP server connection port to use | 
**searchBase** | **string** | LDAP location to be added to the connection URL | 
**authScheme** | **string** | Authentication scheme used for connecting to LDAP server | 
**authRealm** | **string** | The SASL realm to bind to. Required if authScheme is CRAM_MD5 or DIGEST_MD5 | [optional] 
**authUsername** | **string** | This must be a fully qualified username if simple authentication is used. Required if authScheme other than none. | [optional] 
**connectionTimeoutSeconds** | **int** | How long to wait before timeout | 
**connectionRetryDelaySeconds** | **int** | How long to wait before retrying | 
**maxIncidentsCount** | **int** | How many retry attempts | 
**userBaseDn** | **string** | The relative DN where user objects are found (e.g. ou&#x3D;people). This value will have the Search base DN value appended to form the full User search base DN. | [optional] 
**userSubtree** | **bool** | Are users located in structures below the user base DN? | [optional] 
**userObjectClass** | **string** | LDAP class for user objects | [optional] 
**userLdapFilter** | **string** | LDAP search filter to limit user search | [optional] 
**userIdAttribute** | **string** | This is used to find a user given its user ID | [optional] 
**userRealNameAttribute** | **string** | This is used to find a real name given the user ID | [optional] 
**userEmailAddressAttribute** | **string** | This is used to find an email address given the user ID | [optional] 
**userPasswordAttribute** | **string** | If this field is blank the user will be authenticated against a bind with the LDAP server | [optional] 
**ldapGroupsAsRoles** | **bool** | Denotes whether LDAP assigned roles are used as Nexus Repository Manager roles | [optional] 
**groupType** | **string** | Defines a type of groups used: static (a group contains a list of users) or dynamic (a user contains a list of groups). Required if ldapGroupsAsRoles is true. | 
**groupBaseDn** | **string** | The relative DN where group objects are found (e.g. ou&#x3D;Group). This value will have the Search base DN value appended to form the full Group search base DN. | [optional] 
**groupSubtree** | **bool** | Are groups located in structures below the group base DN | [optional] 
**groupObjectClass** | **string** | LDAP class for group objects. Required if groupType is static | [optional] 
**groupIdAttribute** | **string** | This field specifies the attribute of the Object class that defines the Group ID. Required if groupType is static | [optional] 
**groupMemberAttribute** | **string** | LDAP attribute containing the usernames for the group. Required if groupType is static | [optional] 
**groupMemberFormat** | **string** | The format of user ID stored in the group member attribute. Required if groupType is static | [optional] 
**userMemberOfAttribute** | **string** | Set this to the attribute used to store the attribute which holds groups DN in the user object. Required if groupType is dynamic | [optional] 
**id** | **string** | LDAP server ID | [optional] 
**order** | **int** | Order number in which the server is being used when looking for a user | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


