<?php

/* MALrmBundle:Client:index.html.twig */
class __TwigTemplate_c1722603f36a1ff6973274dbc2c48798298625e4d69ea82a5893744fe2738909 extends Twig_Template
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
        $__internal_ab56bd9852d29ed29e5d820344766d337206adbc74a120953dbe8346094cbdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab56bd9852d29ed29e5d820344766d337206adbc74a120953dbe8346094cbdcc->enter($__internal_ab56bd9852d29ed29e5d820344766d337206adbc74a120953dbe8346094cbdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $__internal_bd45b0274d714bb53a51889b0d72e11e52fbe32a03cb1aeeb52b19a4a3b6fe19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd45b0274d714bb53a51889b0d72e11e52fbe32a03cb1aeeb52b19a4a3b6fe19->enter($__internal_bd45b0274d714bb53a51889b0d72e11e52fbe32a03cb1aeeb52b19a4a3b6fe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab56bd9852d29ed29e5d820344766d337206adbc74a120953dbe8346094cbdcc->leave($__internal_ab56bd9852d29ed29e5d820344766d337206adbc74a120953dbe8346094cbdcc_prof);

        
        $__internal_bd45b0274d714bb53a51889b0d72e11e52fbe32a03cb1aeeb52b19a4a3b6fe19->leave($__internal_bd45b0274d714bb53a51889b0d72e11e52fbe32a03cb1aeeb52b19a4a3b6fe19_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_471dd8a0eaac205a5e07cb2a9b2a9ded2a91672382516a093d6079f4d71dc470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471dd8a0eaac205a5e07cb2a9b2a9ded2a91672382516a093d6079f4d71dc470->enter($__internal_471dd8a0eaac205a5e07cb2a9b2a9ded2a91672382516a093d6079f4d71dc470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2fb288410556604e416988c0b1deb09e69387cc94bd02d30e0954b1f6ca93cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb288410556604e416988c0b1deb09e69387cc94bd02d30e0954b1f6ca93cee->enter($__internal_2fb288410556604e416988c0b1deb09e69387cc94bd02d30e0954b1f6ca93cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_2fb288410556604e416988c0b1deb09e69387cc94bd02d30e0954b1f6ca93cee->leave($__internal_2fb288410556604e416988c0b1deb09e69387cc94bd02d30e0954b1f6ca93cee_prof);

        
        $__internal_471dd8a0eaac205a5e07cb2a9b2a9ded2a91672382516a093d6079f4d71dc470->leave($__internal_471dd8a0eaac205a5e07cb2a9b2a9ded2a91672382516a093d6079f4d71dc470_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ffcf06bb61e499b2b91085fec3ec46c2fd40c130227ea6c6daf6c09384c0755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffcf06bb61e499b2b91085fec3ec46c2fd40c130227ea6c6daf6c09384c0755->enter($__internal_1ffcf06bb61e499b2b91085fec3ec46c2fd40c130227ea6c6daf6c09384c0755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_80ff2c95c1aba0f6a841cd5e5a3573ceab760a704ccb3a9cc8b56ec14bb397cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ff2c95c1aba0f6a841cd5e5a3573ceab760a704ccb3a9cc8b56ec14bb397cf->enter($__internal_80ff2c95c1aba0f6a841cd5e5a3573ceab760a704ccb3a9cc8b56ec14bb397cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_80ff2c95c1aba0f6a841cd5e5a3573ceab760a704ccb3a9cc8b56ec14bb397cf->leave($__internal_80ff2c95c1aba0f6a841cd5e5a3573ceab760a704ccb3a9cc8b56ec14bb397cf_prof);

        
        $__internal_1ffcf06bb61e499b2b91085fec3ec46c2fd40c130227ea6c6daf6c09384c0755->leave($__internal_1ffcf06bb61e499b2b91085fec3ec46c2fd40c130227ea6c6daf6c09384c0755_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_787cc6bf9c4f07eca8ac2b1098442b015d0e03213a51789fd4d91cebc42c5828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787cc6bf9c4f07eca8ac2b1098442b015d0e03213a51789fd4d91cebc42c5828->enter($__internal_787cc6bf9c4f07eca8ac2b1098442b015d0e03213a51789fd4d91cebc42c5828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27ff3ef8198109e1e9b7c214f3c5364bcea071b46662008b8a44d984e8ee6ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ff3ef8198109e1e9b7c214f3c5364bcea071b46662008b8a44d984e8ee6ef4->enter($__internal_27ff3ef8198109e1e9b7c214f3c5364bcea071b46662008b8a44d984e8ee6ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
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
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Client:index.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Client:index.html.twig", 34)->display($context);
        // line 35
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES ENTREPRISES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES ENTREPRISES EXISTANTES:</h5>
        </div>

        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> ";
            // line 48
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "<i>alert-info</i>.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 82
            echo "                    ";
            if (($this->getAttribute($context["client"], "id", array()) != "13")) {
                // line 83
                echo "                        <tr>
                            <td><a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "denomination", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "villeCodePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "ville", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nomContact", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "fonctionContact", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "typeClient", array()), "html", null, true);
                echo "</td>
                            ";
                // line 90
                if (($this->getAttribute($context["client"], "typeClient", array()) == "Prospect")) {
                    // line 91
                    echo "                                <td> -- </td>
                                ";
                } else {
                    // line 93
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "partenaire", array()), "html", null, true);
                    echo "</td>
                            ";
                }
                // line 95
                echo "                            ";
                // line 100
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>/<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_delete", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client ?')\";>Supprimer</a></td>
                        </tr>

                    ";
            }
            // line 105
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_27ff3ef8198109e1e9b7c214f3c5364bcea071b46662008b8a44d984e8ee6ef4->leave($__internal_27ff3ef8198109e1e9b7c214f3c5364bcea071b46662008b8a44d984e8ee6ef4_prof);

        
        $__internal_787cc6bf9c4f07eca8ac2b1098442b015d0e03213a51789fd4d91cebc42c5828->leave($__internal_787cc6bf9c4f07eca8ac2b1098442b015d0e03213a51789fd4d91cebc42c5828_prof);

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
        return array (  275 => 106,  269 => 105,  260 => 101,  255 => 100,  253 => 95,  247 => 93,  243 => 91,  241 => 90,  237 => 89,  233 => 88,  229 => 87,  225 => 86,  217 => 85,  211 => 84,  208 => 83,  205 => 82,  201 => 81,  169 => 51,  160 => 48,  156 => 46,  152 => 45,  140 => 35,  138 => 34,  134 => 32,  132 => 31,  125 => 26,  119 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>LISTE DES ENTREPRISES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES ENTREPRISES EXISTANTES:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> {{ flash_message }}<i>alert-info</i>.
            </div>
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
                            {#{% if client.partenaire is empty %}
                                <td> -- </td>
                            {% else %}
                                <td>{{ client.partenaire }}</td>
                            {% endif %}#}
                            <td>{{ client.etat }}</td>
                            <td><a href=\"{{ path ('ma_lrm_client_edit', { 'id': client.id }) }}\">Modifier</a>/<a href=\"{{ path ('ma_lrm_client_delete', { 'id': client.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client ?')\";>Supprimer</a></td>
                        </tr>

                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "MALrmBundle:Client:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Client\\index.html.twig");
    }
}
