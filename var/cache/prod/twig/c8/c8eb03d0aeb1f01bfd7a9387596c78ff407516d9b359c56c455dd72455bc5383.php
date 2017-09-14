<?php

/* MALrmBundle:Client:show.html.twig */
class __TwigTemplate_6618ea3f9b84d18d7f3e46026b127dfd10a1c1da7699f3c6157d5e914aa6b63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Client:show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36211ccabb50e5f4af3287bac6bb5512cc5900c36eaec0aa717c75265e6a62f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36211ccabb50e5f4af3287bac6bb5512cc5900c36eaec0aa717c75265e6a62f8->enter($__internal_36211ccabb50e5f4af3287bac6bb5512cc5900c36eaec0aa717c75265e6a62f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36211ccabb50e5f4af3287bac6bb5512cc5900c36eaec0aa717c75265e6a62f8->leave($__internal_36211ccabb50e5f4af3287bac6bb5512cc5900c36eaec0aa717c75265e6a62f8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ecc4ee54367d9d06789a1bfe19ff553bcf6d67daabcba4aa75a458b9fa6ef421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc4ee54367d9d06789a1bfe19ff553bcf6d67daabcba4aa75a458b9fa6ef421->enter($__internal_ecc4ee54367d9d06789a1bfe19ff553bcf6d67daabcba4aa75a458b9fa6ef421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_ecc4ee54367d9d06789a1bfe19ff553bcf6d67daabcba4aa75a458b9fa6ef421->leave($__internal_ecc4ee54367d9d06789a1bfe19ff553bcf6d67daabcba4aa75a458b9fa6ef421_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfef593c8aa10de44e3908615c51b52622280f4b54678d789c1ebf6235cc1bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfef593c8aa10de44e3908615c51b52622280f4b54678d789c1ebf6235cc1bf2->enter($__internal_cfef593c8aa10de44e3908615c51b52622280f4b54678d789c1ebf6235cc1bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cfef593c8aa10de44e3908615c51b52622280f4b54678d789c1ebf6235cc1bf2->leave($__internal_cfef593c8aa10de44e3908615c51b52622280f4b54678d789c1ebf6235cc1bf2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b695914f8c59add58618de63bc68af003f38fd1e12ce23c8bdb137fe0fca7bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b695914f8c59add58618de63bc68af003f38fd1e12ce23c8bdb137fe0fca7bd8->enter($__internal_b695914f8c59add58618de63bc68af003f38fd1e12ce23c8bdb137fe0fca7bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 17
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 19
        echo "            </div>
        </div>
    </div>
<div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 24
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Client:show.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 27
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Client:show.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>PROFIL CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION D'UN CLIENT:</h5>
        </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>";
        // line 38
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "denomination", array())), "html", null, true);
        echo "</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\" ><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Numéro de client</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "denomination", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "villeCodePostal", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom contact</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "civilite", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nomContact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prénom contact</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenomContact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fonction du contact</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "fonctionContact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Profil</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "typeClient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commentaires</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
    ";
        // line 97
        echo "        ";
        // line 98
        echo "        ";
        // line 99
        echo "            ";
        // line 100
        echo "        ";
        // line 101
        echo "    ";
        // line 102
        echo "    <div class=\"row\">
       <div class=\"col-lg-offset-10 col-lg-2\">
           ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
           <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_client\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce client ?');\"><i class=\"material-icons\">delete</i></button>
           ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
       </div>
    </div>


";
        
        $__internal_b695914f8c59add58618de63bc68af003f38fd1e12ce23c8bdb137fe0fca7bd8->leave($__internal_b695914f8c59add58618de63bc68af003f38fd1e12ce23c8bdb137fe0fca7bd8_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Client:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 106,  233 => 104,  229 => 102,  227 => 101,  225 => 100,  223 => 99,  221 => 98,  219 => 97,  211 => 91,  204 => 87,  197 => 83,  190 => 79,  183 => 75,  174 => 71,  167 => 67,  158 => 63,  151 => 59,  144 => 55,  137 => 51,  124 => 41,  118 => 38,  106 => 28,  104 => 27,  100 => 25,  98 => 24,  91 => 19,  85 => 17,  77 => 15,  75 => 14,  69 => 10,  63 => 9,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
     <link href=\"{{ asset ('css/client.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}
{% block javascripts %}
{% endblock %}

{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
        </div>
    </div>
<div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    {% include 'navbar.html.twig' %}
    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    {% include 'sidebar.html.twig' %}
    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>PROFIL CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION D'UN CLIENT:</h5>
        </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>{{ client.denomination|upper }}</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"{{ path('ma_lrm_client_edit', { 'id': client.id }) }}\" ><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Numéro de client</th>
                <td>{{ client.id }}</td>
            </tr>
            <tr>
                <th>Denomination</th>
                <td>{{ client.denomination }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ client.adresse }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ client.villeCodePostal }} - {{ client.ville }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ client.telephone }}</td>
            </tr>
            <tr>
                <th>Nom contact</th>
                <td>{{ client.civilite }} {{ client.nomContact }}</td>
            </tr>
            <tr>
                <th>Prénom contact</th>
                <td>{{ client.prenomContact }}</td>
            </tr>
            <tr>
                <th>Fonction du contact</th>
                <td>{{ client.fonctionContact }}</td>
            </tr>
            <tr>
                <th>Profil</th>
                <td>{{ client.typeClient }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ client.etat }}</td>
            </tr>
            <tr>
                <th>Commentaires</th>
                <td>{{ client.commentaire }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    {#<div class=\"row\">#}
        {#<div class=\"col-lg-2\">Commentaires</div>#}
        {#<div class=\"row\">#}
            {#<div class=\"col-lg-4\">{{ client.commentaire }}</div>#}
        {#</div>#}
    {#</div>#}
    <div class=\"row\">
       <div class=\"col-lg-offset-10 col-lg-2\">
           {{ form_start(delete_form) }}
           <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_client\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce client ?');\"><i class=\"material-icons\">delete</i></button>
           {{ form_end(delete_form) }}
       </div>
    </div>


{% endblock %}", "MALrmBundle:Client:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Client/show.html.twig");
    }
}
