<?php

/* MALrmBundle:Client:show.html.twig */
class __TwigTemplate_7d9d31f0ae31dd595089e0d7478883d6d6e4ee9056d2e6b52e7a9c39705265dc extends Twig_Template
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
        $__internal_02fb24857860fb330545ddabf5ff5823534d86552058a835b4a7ac1d16624502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fb24857860fb330545ddabf5ff5823534d86552058a835b4a7ac1d16624502->enter($__internal_02fb24857860fb330545ddabf5ff5823534d86552058a835b4a7ac1d16624502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:show.html.twig"));

        $__internal_a52bd36a01a5543b866c7cd1190e3cc7ff1542203ce7623d4a559f763e5530b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52bd36a01a5543b866c7cd1190e3cc7ff1542203ce7623d4a559f763e5530b1->enter($__internal_a52bd36a01a5543b866c7cd1190e3cc7ff1542203ce7623d4a559f763e5530b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02fb24857860fb330545ddabf5ff5823534d86552058a835b4a7ac1d16624502->leave($__internal_02fb24857860fb330545ddabf5ff5823534d86552058a835b4a7ac1d16624502_prof);

        
        $__internal_a52bd36a01a5543b866c7cd1190e3cc7ff1542203ce7623d4a559f763e5530b1->leave($__internal_a52bd36a01a5543b866c7cd1190e3cc7ff1542203ce7623d4a559f763e5530b1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9f89729e4d1bb85f69e2e1e11b8f948f2ec948770bb685a5a7ae267162e3efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f89729e4d1bb85f69e2e1e11b8f948f2ec948770bb685a5a7ae267162e3efb->enter($__internal_b9f89729e4d1bb85f69e2e1e11b8f948f2ec948770bb685a5a7ae267162e3efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_972bbafb31d056d94845b9607d2fbaa4f5017f31ce4a1be65911c030724d3052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972bbafb31d056d94845b9607d2fbaa4f5017f31ce4a1be65911c030724d3052->enter($__internal_972bbafb31d056d94845b9607d2fbaa4f5017f31ce4a1be65911c030724d3052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_972bbafb31d056d94845b9607d2fbaa4f5017f31ce4a1be65911c030724d3052->leave($__internal_972bbafb31d056d94845b9607d2fbaa4f5017f31ce4a1be65911c030724d3052_prof);

        
        $__internal_b9f89729e4d1bb85f69e2e1e11b8f948f2ec948770bb685a5a7ae267162e3efb->leave($__internal_b9f89729e4d1bb85f69e2e1e11b8f948f2ec948770bb685a5a7ae267162e3efb_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85a7cb96b6fed976d49f53e744fa85dbdc8a3d5474bd8ff641302911322d6ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a7cb96b6fed976d49f53e744fa85dbdc8a3d5474bd8ff641302911322d6ad3->enter($__internal_85a7cb96b6fed976d49f53e744fa85dbdc8a3d5474bd8ff641302911322d6ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a871ed88ebda3b913b77cd27da4d88d068aae53501c6823c182fe4b878c4ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a871ed88ebda3b913b77cd27da4d88d068aae53501c6823c182fe4b878c4ad0->enter($__internal_3a871ed88ebda3b913b77cd27da4d88d068aae53501c6823c182fe4b878c4ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a871ed88ebda3b913b77cd27da4d88d068aae53501c6823c182fe4b878c4ad0->leave($__internal_3a871ed88ebda3b913b77cd27da4d88d068aae53501c6823c182fe4b878c4ad0_prof);

        
        $__internal_85a7cb96b6fed976d49f53e744fa85dbdc8a3d5474bd8ff641302911322d6ad3->leave($__internal_85a7cb96b6fed976d49f53e744fa85dbdc8a3d5474bd8ff641302911322d6ad3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_85d1f31c257abdbcae0e2f1572a5eadbe092f7743c6ca40ac436690fb50e5c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d1f31c257abdbcae0e2f1572a5eadbe092f7743c6ca40ac436690fb50e5c7f->enter($__internal_85d1f31c257abdbcae0e2f1572a5eadbe092f7743c6ca40ac436690fb50e5c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67d209084da3e4df214e0b16a2ce4210a5bceb058630259e9a186776bbab6d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d209084da3e4df214e0b16a2ce4210a5bceb058630259e9a186776bbab6d05->enter($__internal_67d209084da3e4df214e0b16a2ce4210a5bceb058630259e9a186776bbab6d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    Connecté en tant que ";
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
        echo "\" >METTRE A JOUR</a>
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
           <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_client\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce client ?');\">Supprimer</button>
           ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
       </div>
    </div>


";
        
        $__internal_67d209084da3e4df214e0b16a2ce4210a5bceb058630259e9a186776bbab6d05->leave($__internal_67d209084da3e4df214e0b16a2ce4210a5bceb058630259e9a186776bbab6d05_prof);

        
        $__internal_85d1f31c257abdbcae0e2f1572a5eadbe092f7743c6ca40ac436690fb50e5c7f->leave($__internal_85d1f31c257abdbcae0e2f1572a5eadbe092f7743c6ca40ac436690fb50e5c7f_prof);

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
        return array (  259 => 106,  254 => 104,  250 => 102,  248 => 101,  246 => 100,  244 => 99,  242 => 98,  240 => 97,  232 => 91,  225 => 87,  218 => 83,  211 => 79,  204 => 75,  195 => 71,  188 => 67,  179 => 63,  172 => 59,  165 => 55,  158 => 51,  145 => 41,  139 => 38,  127 => 28,  125 => 27,  121 => 25,  119 => 24,  112 => 19,  106 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"col-lg-offset-9\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
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
            <a href=\"{{ path('ma_lrm_client_edit', { 'id': client.id }) }}\" >METTRE A JOUR</a>
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
           <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_client\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce client ?');\">Supprimer</button>
           {{ form_end(delete_form) }}
       </div>
    </div>


{% endblock %}", "MALrmBundle:Client:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Client/show.html.twig");
    }
}
