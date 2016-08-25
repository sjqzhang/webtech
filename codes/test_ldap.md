```python
import ldap
import re


LDAP_PATH = "ldap://localhost:389"
LDAP_BASE_DN = "dc=openldap,dc=xx,dc=com"
LDAP_USER = "cn=Manager,dc=openldap,dc=xx,dc=com"
LDAP_PASSWORD = "xxx"


class Ldap:

    def __init__(self, ldap_path=LDAP_PATH, ldap_user=LDAP_USER,
                 ldap_password=LDAP_PASSWORD, ldap_base_dn=LDAP_BASE_DN):
        self.ldap_path = LDAP_PATH
        self.ldap_user = LDAP_USER
        self.ldap_password = LDAP_PASSWORD
        self.ldap_base_dn = LDAP_BASE_DN
        try:
            self.ldap_conn = ldap.initialize(ldap_path)
            self.ldap_conn.simple_bind(ldap_user, ldap_password)
        except ldap.LDAPError, e:
            raise e

    def __ldap_search_user(self, attr_type, value):
        conn = self.ldap_conn
        conn.protocol_version = ldap.VERSION3
        search_scope = ldap.SCOPE_SUBTREE
        retrieve_attributes = None
        search_filter = attr_type+"=" + str(value)
        try:
            ldap_result_id = conn.search(self.ldap_base_dn, search_scope, search_filter, retrieve_attributes)
            result_type, result_data = conn.result(ldap_result_id, 0)
            # print(result_type, result_data)
            if result_type == ldap.RES_SEARCH_ENTRY:
                dn = result_data[0][0]
                user_info = result_data[0][1]
                # get cn
                if 'cn' in user_info:
                    login = user_info['cn'][0]
                else:
                    login = None
                # get user_id
                if 'uid' in user_info:
                    user_id = user_info['uid'][0]
                else:
                    user_id = None
                # get email
                if 'mail' in user_info:
                    email = user_info['mail'][0]
                else:
                    email = None
                # get title
                if 'title' in user_info:
                    title = user_info['title'][0]
                else:
                    title = None
                user = {'login': login, 'user_id': user_id,
                         'email': email, 'title': title}
                return dn, user
            else:
                return None, result_type
        except ldap.LDAPError, e:
            raise e

    # user_name
    def get_user_by_cn(self, cn):
        return self.__ldap_search_user('cn', cn)

    # user_id
    def get_user_by_uid(self, uid):
        return self.__ldap_search_user('uid', uid)

    # email
    def get_user_by_email(self, email):
        return self.__ldap_search_user('mail', email)

    def validate(self, user, password):
        conn = self.ldap_conn
        user = str(user)
        password = str(password)
        if user.isdigit():
            dn, user_info = self.get_user_by_uid(user)
        elif is_email(user):
            dn, user_info = self.get_user_by_email(user)
        else:
            dn, user_info = self.get_user_by_cn(user)
        if not dn:
            return False, 'search return code: ' + str(user_info)+'(maybe user is not existed)'
        try:
            if conn.simple_bind_s(dn, password):
                return True, user_info
            else:
                return False, "validate failed"
        except ldap.LDAPError as e:
            return False, "validate failed"


def is_email(s):
    p = re.compile('[^\._-][\w\.-]+@(?:[A-Za-z0-9]+\.)+[A-Za-z]+$|^0\d{2,3}\d{7,8}$|^1[358]\d{9}$|^147\d{8}')
    match = p.match(s)
    if match:
        return True
    else:
        return False
```
