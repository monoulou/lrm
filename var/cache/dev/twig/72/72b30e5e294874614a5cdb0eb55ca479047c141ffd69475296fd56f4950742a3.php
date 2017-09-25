<?php

/* MALrmBundle:Gestion:index.html.twig */
class __TwigTemplate_00690b97bc6ac0ceb1b54ddd9a13e8d907e81b0faa7de7728c237ee0228fdcd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Gestion:index.html.twig", 1);
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
        $__internal_7fad37b7994e30a980ae507b15ac678b467f7ddb60c097b69365412053eddffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fad37b7994e30a980ae507b15ac678b467f7ddb60c097b69365412053eddffd->enter($__internal_7fad37b7994e30a980ae507b15ac678b467f7ddb60c097b69365412053eddffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:index.html.twig"));

        $__internal_9a861cd7fd70051a8413fba7dc61470c007913e64dce11e7a8f58fae10828ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a861cd7fd70051a8413fba7dc61470c007913e64dce11e7a8f58fae10828ae7->enter($__internal_9a861cd7fd70051a8413fba7dc61470c007913e64dce11e7a8f58fae10828ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fad37b7994e30a980ae507b15ac678b467f7ddb60c097b69365412053eddffd->leave($__internal_7fad37b7994e30a980ae507b15ac678b467f7ddb60c097b69365412053eddffd_prof);

        
        $__internal_9a861cd7fd70051a8413fba7dc61470c007913e64dce11e7a8f58fae10828ae7->leave($__internal_9a861cd7fd70051a8413fba7dc61470c007913e64dce11e7a8f58fae10828ae7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1477c983694a0367ada8a8e3f246efe10617d5eb7273274b45b4883400058d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1477c983694a0367ada8a8e3f246efe10617d5eb7273274b45b4883400058d68->enter($__internal_1477c983694a0367ada8a8e3f246efe10617d5eb7273274b45b4883400058d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ab868567cfe5f7d9b452f3edaa2ab14a1df82631c3de209a91d4f1797a708173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab868567cfe5f7d9b452f3edaa2ab14a1df82631c3de209a91d4f1797a708173->enter($__internal_ab868567cfe5f7d9b452f3edaa2ab14a1df82631c3de209a91d4f1797a708173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_ab868567cfe5f7d9b452f3edaa2ab14a1df82631c3de209a91d4f1797a708173->leave($__internal_ab868567cfe5f7d9b452f3edaa2ab14a1df82631c3de209a91d4f1797a708173_prof);

        
        $__internal_1477c983694a0367ada8a8e3f246efe10617d5eb7273274b45b4883400058d68->leave($__internal_1477c983694a0367ada8a8e3f246efe10617d5eb7273274b45b4883400058d68_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12ec6d8cc638e2b0ba9a6efa3ca19746d6bd541bcb1f881dfd4b7b31b392635d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ec6d8cc638e2b0ba9a6efa3ca19746d6bd541bcb1f881dfd4b7b31b392635d->enter($__internal_12ec6d8cc638e2b0ba9a6efa3ca19746d6bd541bcb1f881dfd4b7b31b392635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fc294bf0089c3fd762d4dcdbb912f0bb054523d27c563820925b742a6748e282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc294bf0089c3fd762d4dcdbb912f0bb054523d27c563820925b742a6748e282->enter($__internal_fc294bf0089c3fd762d4dcdbb912f0bb054523d27c563820925b742a6748e282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_fc294bf0089c3fd762d4dcdbb912f0bb054523d27c563820925b742a6748e282->leave($__internal_fc294bf0089c3fd762d4dcdbb912f0bb054523d27c563820925b742a6748e282_prof);

        
        $__internal_12ec6d8cc638e2b0ba9a6efa3ca19746d6bd541bcb1f881dfd4b7b31b392635d->leave($__internal_12ec6d8cc638e2b0ba9a6efa3ca19746d6bd541bcb1f881dfd4b7b31b392635d_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_66850d2eb4e7caaa108e707860d54f1be7980d3726f2cd06b2300cfe8b673f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66850d2eb4e7caaa108e707860d54f1be7980d3726f2cd06b2300cfe8b673f41->enter($__internal_66850d2eb4e7caaa108e707860d54f1be7980d3726f2cd06b2300cfe8b673f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_087f21af55a856919831eaa644edd396e610c77712e7802390c862dc7d060ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087f21af55a856919831eaa644edd396e610c77712e7802390c862dc7d060ea6->enter($__internal_087f21af55a856919831eaa644edd396e610c77712e7802390c862dc7d060ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 23
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 25
        echo "            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:index.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:index.html.twig", 34)->display($context);
        // line 35
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>SUIVI DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES POURVUES</h5>
        </div>

        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo ".</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suiviOffre"]) ? $context["suiviOffre"] : $this->getContext($context, "suiviOffre")));
        foreach ($context['_seq'] as $context["id"] => $context["offre"]) {
            // line 71
            echo "                    <tr>
                        <td> <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_resume", array("id" => $context["id"])), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 1, array(), "array"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 2, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 3, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 4, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 5, array(), "array"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
                </tbody>
            </table>
        </div>
        <div class=\"row\">
            <h4>FACTURATIONS DU MOIS</h4><hr style=\"border: 1px solid darkgray;\">
        </div>
        ";
        // line 86
        if ( !twig_test_empty((isset($context["factureMois"]) ? $context["factureMois"] : $this->getContext($context, "factureMois")))) {
            // line 87
            echo "            ";
            $context["i"] = 0;
            // line 88
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Clients à facturer</h3>
                </div>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Client</th>
                        <th>Candidat</th>
                        <th>Date d'intégration</th>
                        <th>Utilisateur</th>

                    </tr>
                    </thead>
                    ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["factureMois"]) ? $context["factureMois"] : $this->getContext($context, "factureMois")));
            foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
                // line 104
                echo "                        <tbody>
                        <tr>
                            ";
                // line 106
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 107
                echo "                            <td>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_edit", array("id" => $this->getAttribute($context["facture"], 4, array(), "array"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], 1, array(), "array"), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], 2, array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], 5, array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], 3, array(), "array"), "html", null, true);
                echo "</td>
                        </tr>
                        </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                </table>
            </div>
        ";
        }
        // line 118
        echo "    </div>



";
        
        $__internal_087f21af55a856919831eaa644edd396e610c77712e7802390c862dc7d060ea6->leave($__internal_087f21af55a856919831eaa644edd396e610c77712e7802390c862dc7d060ea6_prof);

        
        $__internal_66850d2eb4e7caaa108e707860d54f1be7980d3726f2cd06b2300cfe8b673f41->leave($__internal_66850d2eb4e7caaa108e707860d54f1be7980d3726f2cd06b2300cfe8b673f41_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Gestion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 118,  295 => 115,  285 => 111,  281 => 110,  277 => 109,  271 => 108,  266 => 107,  264 => 106,  260 => 104,  256 => 103,  239 => 88,  236 => 87,  234 => 86,  225 => 79,  216 => 76,  212 => 75,  208 => 74,  204 => 73,  198 => 72,  195 => 71,  191 => 70,  167 => 48,  158 => 46,  154 => 45,  142 => 35,  140 => 34,  136 => 32,  134 => 31,  126 => 26,  123 => 25,  117 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>SUIVI DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES POURVUES</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">{{ flash_message }}.</div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </tfoot>
                <tbody>
                {% for id, offre in suiviOffre %}
                    <tr>
                        <td> <a href=\"{{ path('ma_lrm_gestion_resume', { 'id': id }) }}\" >{{ offre[1] }}</a></td>
                        <td>{{ offre[2] }}</td>
                        <td>{{ offre[3] }}</td>
                        <td>{{ offre[4] }}</td>
                        <td>{{ offre[5] }}</td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
        <div class=\"row\">
            <h4>FACTURATIONS DU MOIS</h4><hr style=\"border: 1px solid darkgray;\">
        </div>
        {% if factureMois is not empty %}
            {% set i = 0 %}
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Clients à facturer</h3>
                </div>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Client</th>
                        <th>Candidat</th>
                        <th>Date d'intégration</th>
                        <th>Utilisateur</th>

                    </tr>
                    </thead>
                    {% for facture in factureMois %}
                        <tbody>
                        <tr>
                            {% set i = i + 1 %}
                            <td>{{ i }}</td>
                            <td><a href=\"{{ path ('ma_lrm_client_edit', { 'id': facture[4] }) }}\">{{ facture[1] }}</a></td>
                            <td>{{ facture[2] }}</td>
                            <td>{{ facture[5] }}</td>
                            <td>{{ facture[3] }}</td>
                        </tr>
                        </tbody>
                    {% endfor %}
                </table>
            </div>
        {% endif %}
    </div>



{% endblock %}", "MALrmBundle:Gestion:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/index.html.twig");
    }
}
