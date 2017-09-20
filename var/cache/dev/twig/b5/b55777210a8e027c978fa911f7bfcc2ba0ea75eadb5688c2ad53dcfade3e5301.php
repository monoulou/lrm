<?php

/* MALrmBundle:Client:index.html.twig */
class __TwigTemplate_1f2798dab0ad12eee7b6b415cfa34c170366746d8154dcb946cfeb7d66dd170e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Client:index.html.twig", 1);
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
        $__internal_3a036e60b27338a9924a9326f7c21064d10a040fb78998576383271c20274e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a036e60b27338a9924a9326f7c21064d10a040fb78998576383271c20274e38->enter($__internal_3a036e60b27338a9924a9326f7c21064d10a040fb78998576383271c20274e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $__internal_ce66809cb2c24f89c0f3773d0914ff649e14ed2daf52be832a40c97b3bd8cce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce66809cb2c24f89c0f3773d0914ff649e14ed2daf52be832a40c97b3bd8cce9->enter($__internal_ce66809cb2c24f89c0f3773d0914ff649e14ed2daf52be832a40c97b3bd8cce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a036e60b27338a9924a9326f7c21064d10a040fb78998576383271c20274e38->leave($__internal_3a036e60b27338a9924a9326f7c21064d10a040fb78998576383271c20274e38_prof);

        
        $__internal_ce66809cb2c24f89c0f3773d0914ff649e14ed2daf52be832a40c97b3bd8cce9->leave($__internal_ce66809cb2c24f89c0f3773d0914ff649e14ed2daf52be832a40c97b3bd8cce9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4203719282ca53262464e424b0b42a300af4200af0b9505cfc5347408d2af7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4203719282ca53262464e424b0b42a300af4200af0b9505cfc5347408d2af7f9->enter($__internal_4203719282ca53262464e424b0b42a300af4200af0b9505cfc5347408d2af7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0a5d45523ad828a9133a44a60b28d87a2d0226dbd19200bb5b67827c367d8abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5d45523ad828a9133a44a60b28d87a2d0226dbd19200bb5b67827c367d8abf->enter($__internal_0a5d45523ad828a9133a44a60b28d87a2d0226dbd19200bb5b67827c367d8abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_0a5d45523ad828a9133a44a60b28d87a2d0226dbd19200bb5b67827c367d8abf->leave($__internal_0a5d45523ad828a9133a44a60b28d87a2d0226dbd19200bb5b67827c367d8abf_prof);

        
        $__internal_4203719282ca53262464e424b0b42a300af4200af0b9505cfc5347408d2af7f9->leave($__internal_4203719282ca53262464e424b0b42a300af4200af0b9505cfc5347408d2af7f9_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c9168b753b46b7b8d160fc8f483a94231fe36799df58dd02c5a67a89199a2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9168b753b46b7b8d160fc8f483a94231fe36799df58dd02c5a67a89199a2d8->enter($__internal_6c9168b753b46b7b8d160fc8f483a94231fe36799df58dd02c5a67a89199a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4bba380d7e15fd0986331400add48d07a66cbcd621a2da064f0199a44f8f5b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bba380d7e15fd0986331400add48d07a66cbcd621a2da064f0199a44f8f5b52->enter($__internal_4bba380d7e15fd0986331400add48d07a66cbcd621a2da064f0199a44f8f5b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_4bba380d7e15fd0986331400add48d07a66cbcd621a2da064f0199a44f8f5b52->leave($__internal_4bba380d7e15fd0986331400add48d07a66cbcd621a2da064f0199a44f8f5b52_prof);

        
        $__internal_6c9168b753b46b7b8d160fc8f483a94231fe36799df58dd02c5a67a89199a2d8->leave($__internal_6c9168b753b46b7b8d160fc8f483a94231fe36799df58dd02c5a67a89199a2d8_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_39d679b846329a94756d2aeb627d7503fb2a01591749e261e2ec37158d28eb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d679b846329a94756d2aeb627d7503fb2a01591749e261e2ec37158d28eb35->enter($__internal_39d679b846329a94756d2aeb627d7503fb2a01591749e261e2ec37158d28eb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e415d47a17f624c518b5b499b7b08da383198057ff3ba36ffe5a2dcc32e96f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e415d47a17f624c518b5b499b7b08da383198057ff3ba36ffe5a2dcc32e96f2->enter($__internal_9e415d47a17f624c518b5b499b7b08da383198057ff3ba36ffe5a2dcc32e96f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 24
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 26
        echo "            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 32
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Client:index.html.twig", 32)->display($context);
        // line 33
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 35
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Client:index.html.twig", 35)->display($context);
        // line 36
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES ENTREPRISES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES ENTREPRISES EXISTANTES:</h5>
        </div>

        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 47
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo ".</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 80
            echo "                    ";
            if (($this->getAttribute($context["client"], "id", array()) != "13")) {
                // line 81
                echo "                        <tr>
                            <td><a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "denomination", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "villeCodePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "ville", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nomContact", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "fonctionContact", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "typeClient", array()), "html", null, true);
                echo "</td>
                            ";
                // line 88
                if (($this->getAttribute($context["client"], "typeClient", array()) == "Prospect")) {
                    // line 89
                    echo "                                <td> -- </td>
                                ";
                } else {
                    // line 91
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "partenaire", array()), "html", null, true);
                    echo "</td>
                            ";
                }
                // line 93
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
                echo "</td>
                            <td style=\"text-align: right\"><a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\"><i class=\"material-icons\">mode_edit</i></a><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_delete", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client et de ses offres?')\";><i class=\"material-icons\">delete</i></a></td>
                        </tr>

                    ";
            }
            // line 98
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_9e415d47a17f624c518b5b499b7b08da383198057ff3ba36ffe5a2dcc32e96f2->leave($__internal_9e415d47a17f624c518b5b499b7b08da383198057ff3ba36ffe5a2dcc32e96f2_prof);

        
        $__internal_39d679b846329a94756d2aeb627d7503fb2a01591749e261e2ec37158d28eb35->leave($__internal_39d679b846329a94756d2aeb627d7503fb2a01591749e261e2ec37158d28eb35_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 99,  265 => 98,  256 => 94,  251 => 93,  245 => 91,  241 => 89,  239 => 88,  235 => 87,  231 => 86,  227 => 85,  223 => 84,  215 => 83,  209 => 82,  206 => 81,  203 => 80,  199 => 79,  167 => 49,  158 => 47,  154 => 46,  142 => 36,  140 => 35,  136 => 33,  134 => 32,  126 => 27,  123 => 26,  117 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
     <link href=\"{{ asset ('DataTables/media/css/dataTables.bootstrap.min.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}


    {% block javascripts %}
        <script src =\"{{ asset ('DataTables/media/js/dataTables.bootstrap.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/tables.js') }}\" type=\"text/javascript\"></script>
    {% endblock %}



{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"material-icons\">input</i></a></div>
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
            <h3>LISTE DES ENTREPRISES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES ENTREPRISES EXISTANTES:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">{{ flash_message }}.</div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                {% for client in clients %}
                    {% if client.id != '13' %}
                        <tr>
                            <td><a href=\"{{ path('ma_lrm_client_show', { 'id': client.id }) }}\">{{ client.denomination }}</a></td>
                            <td>{{ client.adresse }}-{{ client.villeCodePostal }} {{ client.ville }}</td>
                            <td>{{ client.nomContact }}</td>
                            <td>{{ client.fonctionContact }}</td>
                            <td>{{ client.telephone }}</td>
                            <td>{{ client.typeClient }}</td>
                            {% if client.typeClient == 'Prospect' %}
                                <td> -- </td>
                                {% else %}
                                    <td>{{ client.partenaire }}</td>
                            {% endif %}
                            <td>{{ client.etat }}</td>
                            <td style=\"text-align: right\"><a href=\"{{ path ('ma_lrm_client_edit', { 'id': client.id }) }}\"><i class=\"material-icons\">mode_edit</i></a><a href=\"{{ path ('ma_lrm_client_delete', { 'id': client.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client et de ses offres?')\";><i class=\"material-icons\">delete</i></a></td>
                        </tr>

                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "MALrmBundle:Client:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Client/index.html.twig");
    }
}
