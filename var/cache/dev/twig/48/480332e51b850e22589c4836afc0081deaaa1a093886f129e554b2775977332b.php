<?php

/* @MALrm/Client/index.html.twig */
class __TwigTemplate_c1722603f36a1ff6973274dbc2c48798298625e4d69ea82a5893744fe2738909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Client/index.html.twig", 1);
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
        $__internal_dcc1567108c98ba66ade866ac6b4379863944d3914c3d8acccf8c662313b8227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc1567108c98ba66ade866ac6b4379863944d3914c3d8acccf8c662313b8227->enter($__internal_dcc1567108c98ba66ade866ac6b4379863944d3914c3d8acccf8c662313b8227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Client/index.html.twig"));

        $__internal_f16a30a92b8bac48b300335c0561fe93e7f663e7d6511bbdf734fac5b86669bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16a30a92b8bac48b300335c0561fe93e7f663e7d6511bbdf734fac5b86669bb->enter($__internal_f16a30a92b8bac48b300335c0561fe93e7f663e7d6511bbdf734fac5b86669bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcc1567108c98ba66ade866ac6b4379863944d3914c3d8acccf8c662313b8227->leave($__internal_dcc1567108c98ba66ade866ac6b4379863944d3914c3d8acccf8c662313b8227_prof);

        
        $__internal_f16a30a92b8bac48b300335c0561fe93e7f663e7d6511bbdf734fac5b86669bb->leave($__internal_f16a30a92b8bac48b300335c0561fe93e7f663e7d6511bbdf734fac5b86669bb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3ea305b20906e939bb5788a00fb7f8e1304d5614832ebda5717fed21058193c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ea305b20906e939bb5788a00fb7f8e1304d5614832ebda5717fed21058193c->enter($__internal_c3ea305b20906e939bb5788a00fb7f8e1304d5614832ebda5717fed21058193c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_812004ef3f0742e1c2f9f26a7d0f6e450c3797f6d8a20f7367f54051b44388a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812004ef3f0742e1c2f9f26a7d0f6e450c3797f6d8a20f7367f54051b44388a8->enter($__internal_812004ef3f0742e1c2f9f26a7d0f6e450c3797f6d8a20f7367f54051b44388a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_812004ef3f0742e1c2f9f26a7d0f6e450c3797f6d8a20f7367f54051b44388a8->leave($__internal_812004ef3f0742e1c2f9f26a7d0f6e450c3797f6d8a20f7367f54051b44388a8_prof);

        
        $__internal_c3ea305b20906e939bb5788a00fb7f8e1304d5614832ebda5717fed21058193c->leave($__internal_c3ea305b20906e939bb5788a00fb7f8e1304d5614832ebda5717fed21058193c_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23ee2d7ff2dbd628e326a512fb83a03012f0ea2a928b2a055fda12a5df407834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ee2d7ff2dbd628e326a512fb83a03012f0ea2a928b2a055fda12a5df407834->enter($__internal_23ee2d7ff2dbd628e326a512fb83a03012f0ea2a928b2a055fda12a5df407834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0ba64d776c47dda1aaacdfc4521cdc4f5b517e6382554067835f5096a312ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ba64d776c47dda1aaacdfc4521cdc4f5b517e6382554067835f5096a312ac4->enter($__internal_f0ba64d776c47dda1aaacdfc4521cdc4f5b517e6382554067835f5096a312ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_f0ba64d776c47dda1aaacdfc4521cdc4f5b517e6382554067835f5096a312ac4->leave($__internal_f0ba64d776c47dda1aaacdfc4521cdc4f5b517e6382554067835f5096a312ac4_prof);

        
        $__internal_23ee2d7ff2dbd628e326a512fb83a03012f0ea2a928b2a055fda12a5df407834->leave($__internal_23ee2d7ff2dbd628e326a512fb83a03012f0ea2a928b2a055fda12a5df407834_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa3306e186e96095b8b9d640f5e190392143200903365b558143a5d7845f12ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3306e186e96095b8b9d640f5e190392143200903365b558143a5d7845f12ea->enter($__internal_fa3306e186e96095b8b9d640f5e190392143200903365b558143a5d7845f12ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f900481eda0f0e09ce7952d3e343af21bc0228b47d6824dd4f86d42da7a5c033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f900481eda0f0e09ce7952d3e343af21bc0228b47d6824dd4f86d42da7a5c033->enter($__internal_f900481eda0f0e09ce7952d3e343af21bc0228b47d6824dd4f86d42da7a5c033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    Connecté en tant que ";
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
        $this->loadTemplate("navbar.html.twig", "@MALrm/Client/index.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Client/index.html.twig", 34)->display($context);
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
            echo "                    <tr>
                        <td><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "denomination", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "villeCodePostal", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "ville", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nomContact", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "fonctionContact", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "typeClient", array()), "html", null, true);
            echo "</td>
                        ";
            // line 89
            if (twig_test_empty($this->getAttribute($context["client"], "partenaire", array()))) {
                // line 90
                echo "                            <td> -- </td>
                        ";
            } else {
                // line 92
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "partenaire", array()), "html", null, true);
                echo "</td>
                        ";
            }
            // line 94
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>/<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_delete", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client ?')\";>Supprimer</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_f900481eda0f0e09ce7952d3e343af21bc0228b47d6824dd4f86d42da7a5c033->leave($__internal_f900481eda0f0e09ce7952d3e343af21bc0228b47d6824dd4f86d42da7a5c033_prof);

        
        $__internal_fa3306e186e96095b8b9d640f5e190392143200903365b558143a5d7845f12ea->leave($__internal_fa3306e186e96095b8b9d640f5e190392143200903365b558143a5d7845f12ea_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 98,  255 => 95,  250 => 94,  244 => 92,  240 => 90,  238 => 89,  234 => 88,  230 => 87,  226 => 86,  222 => 85,  214 => 84,  208 => 83,  205 => 82,  201 => 81,  169 => 51,  160 => 48,  156 => 46,  152 => 45,  140 => 35,  138 => 34,  134 => 32,  132 => 31,  125 => 26,  119 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                    <tr>
                        <td><a href=\"{{ path('ma_lrm_client_show', { 'id': client.id }) }}\">{{ client.denomination }}</a></td>
                        <td>{{ client.adresse }}-{{ client.villeCodePostal }} {{ client.ville }}</td>
                        <td>{{ client.nomContact }}</td>
                        <td>{{ client.fonctionContact }}</td>
                        <td>{{ client.telephone }}</td>
                        <td>{{ client.typeClient }}</td>
                        {% if client.partenaire is empty %}
                            <td> -- </td>
                        {% else %}
                            <td>{{ client.partenaire }}</td>
                        {% endif %}
                        <td>{{ client.etat }}</td>
                        <td><a href=\"{{ path ('ma_lrm_client_edit', { 'id': client.id }) }}\">Modifier</a>/<a href=\"{{ path ('ma_lrm_client_delete', { 'id': client.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client ?')\";>Supprimer</a></td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "@MALrm/Client/index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Client\\index.html.twig");
    }
}
