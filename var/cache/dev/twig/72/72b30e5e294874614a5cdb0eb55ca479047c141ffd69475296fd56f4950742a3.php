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
        $__internal_d4ec43739b8a0a258cf8568b6ec4640c13c8f969ec8554fb307a52c48bb12e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ec43739b8a0a258cf8568b6ec4640c13c8f969ec8554fb307a52c48bb12e46->enter($__internal_d4ec43739b8a0a258cf8568b6ec4640c13c8f969ec8554fb307a52c48bb12e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:index.html.twig"));

        $__internal_28386b3110824aaa48fcecd8fc4c491c49c7685c6e37eab50197f916189548e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28386b3110824aaa48fcecd8fc4c491c49c7685c6e37eab50197f916189548e6->enter($__internal_28386b3110824aaa48fcecd8fc4c491c49c7685c6e37eab50197f916189548e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ec43739b8a0a258cf8568b6ec4640c13c8f969ec8554fb307a52c48bb12e46->leave($__internal_d4ec43739b8a0a258cf8568b6ec4640c13c8f969ec8554fb307a52c48bb12e46_prof);

        
        $__internal_28386b3110824aaa48fcecd8fc4c491c49c7685c6e37eab50197f916189548e6->leave($__internal_28386b3110824aaa48fcecd8fc4c491c49c7685c6e37eab50197f916189548e6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51dcde081e554500e6ad33d3f422519d7b91ef78ae95223c13d2887ab497afc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51dcde081e554500e6ad33d3f422519d7b91ef78ae95223c13d2887ab497afc5->enter($__internal_51dcde081e554500e6ad33d3f422519d7b91ef78ae95223c13d2887ab497afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ddd8577dcec379f1fe87f206b0ec5f502a1e813634f856ea75bf03cdd0db0d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd8577dcec379f1fe87f206b0ec5f502a1e813634f856ea75bf03cdd0db0d3b->enter($__internal_ddd8577dcec379f1fe87f206b0ec5f502a1e813634f856ea75bf03cdd0db0d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_ddd8577dcec379f1fe87f206b0ec5f502a1e813634f856ea75bf03cdd0db0d3b->leave($__internal_ddd8577dcec379f1fe87f206b0ec5f502a1e813634f856ea75bf03cdd0db0d3b_prof);

        
        $__internal_51dcde081e554500e6ad33d3f422519d7b91ef78ae95223c13d2887ab497afc5->leave($__internal_51dcde081e554500e6ad33d3f422519d7b91ef78ae95223c13d2887ab497afc5_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f1f5319b4437049c1f54ae686e5df1741d10f33789e76ca8fe188c4de628986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1f5319b4437049c1f54ae686e5df1741d10f33789e76ca8fe188c4de628986->enter($__internal_5f1f5319b4437049c1f54ae686e5df1741d10f33789e76ca8fe188c4de628986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a294f6a997cc8ebec12ed667a02ca5499187e0118ef86b0a083e4735e2e0f61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a294f6a997cc8ebec12ed667a02ca5499187e0118ef86b0a083e4735e2e0f61d->enter($__internal_a294f6a997cc8ebec12ed667a02ca5499187e0118ef86b0a083e4735e2e0f61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_a294f6a997cc8ebec12ed667a02ca5499187e0118ef86b0a083e4735e2e0f61d->leave($__internal_a294f6a997cc8ebec12ed667a02ca5499187e0118ef86b0a083e4735e2e0f61d_prof);

        
        $__internal_5f1f5319b4437049c1f54ae686e5df1741d10f33789e76ca8fe188c4de628986->leave($__internal_5f1f5319b4437049c1f54ae686e5df1741d10f33789e76ca8fe188c4de628986_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce4bd9853e81994a8d1b432e9c70df3e2aca78611baedeb42b6859b4c4cfbb3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4bd9853e81994a8d1b432e9c70df3e2aca78611baedeb42b6859b4c4cfbb3b->enter($__internal_ce4bd9853e81994a8d1b432e9c70df3e2aca78611baedeb42b6859b4c4cfbb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4740b66815ed63bd31a648baadbf7eaed7a965df4500471222a3b5b3ba60f1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4740b66815ed63bd31a648baadbf7eaed7a965df4500471222a3b5b3ba60f1da->enter($__internal_4740b66815ed63bd31a648baadbf7eaed7a965df4500471222a3b5b3ba60f1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        ";
        // line 83
        if ( !twig_test_empty((isset($context["factureMois"]) ? $context["factureMois"] : $this->getContext($context, "factureMois")))) {
            // line 84
            echo "            <div class=\"row\">
                <h4>FACTURATIONS DU MOIS</h4><hr style=\"border: 1px solid darkgray;\">
            </div>
            ";
            // line 87
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
        
        $__internal_4740b66815ed63bd31a648baadbf7eaed7a965df4500471222a3b5b3ba60f1da->leave($__internal_4740b66815ed63bd31a648baadbf7eaed7a965df4500471222a3b5b3ba60f1da_prof);

        
        $__internal_ce4bd9853e81994a8d1b432e9c70df3e2aca78611baedeb42b6859b4c4cfbb3b->leave($__internal_ce4bd9853e81994a8d1b432e9c70df3e2aca78611baedeb42b6859b4c4cfbb3b_prof);

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
        return array (  301 => 118,  296 => 115,  286 => 111,  282 => 110,  278 => 109,  272 => 108,  267 => 107,  265 => 106,  261 => 104,  257 => 103,  240 => 88,  238 => 87,  233 => 84,  231 => 83,  225 => 79,  216 => 76,  212 => 75,  208 => 74,  204 => 73,  198 => 72,  195 => 71,  191 => 70,  167 => 48,  158 => 46,  154 => 45,  142 => 35,  140 => 34,  136 => 32,  134 => 31,  126 => 26,  123 => 25,  117 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
        {% if factureMois is not empty %}
            <div class=\"row\">
                <h4>FACTURATIONS DU MOIS</h4><hr style=\"border: 1px solid darkgray;\">
            </div>
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
